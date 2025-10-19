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
       Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('pengaduan_id'); // PK
            $table->string('nomor_tiket')->unique(); // UNQ
            $table->unsignedBigInteger('warga_id'); // FK ke warga
            $table->unsignedBigInteger('kategori_id')->nullable(); // FK ke kategori_pengaduan
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('status')->default('baru'); // baru, diproses, selesai, ditolak
            $table->string('lokasi_text')->nullable(); // deskripsi lokasi
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('warga_id')->references('warga_id')->on('warga')->onDelete('cascade');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori_pengaduan')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
