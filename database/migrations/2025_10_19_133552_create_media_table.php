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
        Schema::create('media', function (Blueprint $table) {
            $table->id('media_id'); // Primary Key
            $table->string('ref_table'); // nama tabel referensi (misal: warga, produk, dll)
            $table->unsignedBigInteger('ref_id'); // id dari tabel referensi
            $table->string('file_url'); // path atau url file
            $table->string('caption')->nullable(); // keterangan file
            $table->string('mime_type')->nullable(); // tipe file (image/png, pdf, dll)
            $table->integer('sort_order')->default(0); // urutan tampilan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
