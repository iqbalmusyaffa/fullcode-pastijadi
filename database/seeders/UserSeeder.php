<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin10',
                'email' => 'ani@example.com',
                'phone_number' => '085678901234',
                'username' => 'admin10 ',
                'password' => Hash::make('admin10'),
                'brith_date' => '1988-10-20',
                'brith_place' => 'Surabaya',
                'gender' => 'Perempuan',
                'address' => 'Jl. Pahlawan No. 45',
                'role_id' => 1
            ],
            [
                'name' => 'Husni Mubarok',
                'email' => 'husni@example.com',
                'phone_number' => '087654321098',
                'username' => 'husni123',
                'password' => Hash::make('husni123'),
                'brith_date' => '1995-02-28',
                'brith_place' => 'Surabaya',
                'gender' => 'Laki-Laki',
                'address' => 'Jl. Merdeka No. 10',
                'role_id' => 1
            ],
        ];

        foreach($users as $key => $val){
            User::create($val);
        }
    }
}
