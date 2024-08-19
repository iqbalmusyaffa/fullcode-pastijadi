<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'categories_id',
        'user_id', // Added
        'image',
        'published_at', // Added
        'read_time', // Added
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
    /**
     * Define the relationship with Kategori.
     */
    public function categories()
    {
        return $this->belongsTo(Kategori::class, 'categories_id');
    }

    /**
     * Define the relationship with User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Added relationship
    }
}
