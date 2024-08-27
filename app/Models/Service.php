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
        'deskripsifull',
        'image',
        'service_categories_id',
        'price',
    ];

    /**
     * Get the category that owns the service.
     */
     public function serviceCategory()
    {
        return $this->belongsTo(KategoriService::class, 'service_categories_id');
    }
}
