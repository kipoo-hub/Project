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
        Schema::create('tindak_lanjut', function (Blueprint $table) {
            $table->id('tindak_id'); // PK
            $table->unsignedBigInteger('pengaduan_id'); // FK ke pengaduan
            $table->string('petugas')->nullable(); // nama petugas penindak
            $table->text('aksi')->nullable(); // tindakan yang dilakukan
            $table->text('catatan')->nullable(); // catatan tambahan
            $table->timestamps();

            // Foreign key
            $table->foreign('pengaduan_id')->references('pengaduan_id')->on('pengaduan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindak_lanjut');
    }
};
