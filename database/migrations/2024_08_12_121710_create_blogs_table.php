<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel
            $table->longText('description')->nullable(); // Deskripsi artikel
            $table->foreignId('categories_id')->constrained('categories'); // Kategori artikel
            $table->foreignId('user_id')->constrained('users'); // Referensi ke tabel users
            $table->string('image'); // URL gambar
            $table->timestamp('published_at')->nullable(); // Tanggal publikasi
            $table->integer('read_time')->nullable(); // Perkiraan waktu baca (dalam menit)
            $table->timestamps(); // Timestamp untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
