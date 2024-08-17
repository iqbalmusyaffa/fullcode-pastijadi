<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_services',
        'deskripsi',
        'service_categories_id',
        'price',
    ];

    /**
     * Get the category that owns the service.
     */
    public function category()
    {
        return $this->belongsTo(KategoriService::class, 'service_categories_id');
    }
}
