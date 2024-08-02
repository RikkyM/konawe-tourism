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
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_wisata');
            $table->string('harga', 6)->nullable();
            $table->text('deskripsi');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('gambar');
            $table->boolean('favorit')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
