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
        Schema::create('kategori_pengaduan', function (Blueprint $table) {
            $table->id('kategori_id'); // PK
            $table->string('nama');
            $table->integer('sla_hari')->default(0); // batas waktu penyelesaian
            $table->string('prioritas')->nullable(); // misal: rendah, sedang, tinggi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_pengaduan');
    }
};
