<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Writer;
use PragmaRX\Google2FA\Google2FA;

class TwoFactorController extends Controller
{
    protected $google2fa;

    public function __construct()
    {
        $this->google2fa = new Google2FA();
    }

    public function enable2fa()
    {
        $user = Auth::user();

        if (!$user->two_factor_enabled) {
            $secretKey = $this->google2fa->generateSecretKey();
            $user->two_factor_code = $secretKey;
            $user->save();

            $google2faUrl = $this->google2fa->getQRCodeUrl(
                'Your App Name',
                $user->email,
                $secretKey
            );

            // Generate the QR code as an SVG image
            $renderer = new ImageRenderer(
                new RendererStyle(256), // Set the size of the QR code
                new SvgImageBackEnd()
            );
            $writer = new Writer($renderer);
            $QRImage = $writer->writeString($google2faUrl);

            return view('pages.profile.2fa.enable', ['QRImage' => $QRImage, 'secretKey' => $secretKey]);
        }

        return redirect()->route('dashboard')->with('error', '2FA is already enabled.');
    }

    public function verify2fa(Request $request)
    {
        $user = Auth::user();
        $code = $request->input('code');

        if ($this->google2fa->verifyKey($user->two_factor_code, $code)) {
            $user->two_factor_enabled = true;
            $user->two_factor_verified = true;
            $user->save();

            session(['two_factor_verified' => true]);

            return redirect()->route('dashboard')->with('success', '2FA verified and enabled.');
        }

        return back()->withErrors(['code' => 'Invalid verification code.']);
    }


    public function disable2fa()
    {
        $user = Auth::user();
        $user->two_factor_enabled = false;
        $user->two_factor_code = null;
        $user->two_factor_expires_at = null;
        $user->save();

        return redirect()->route('dashboard')->with('success', '2FA has been disabled.');
    }

    public function showVerifyPage()
    {
        return view('pages.profile.2fa.verify');
    }
}
