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
        Schema::table('pengaduan', function (Blueprint $table) {
            // Ubah kolom warga_id agar boleh null
            $table->unsignedBigInteger('warga_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            // Kembalikan seperti semula jika di-rollback
            $table->unsignedBigInteger('warga_id')->nullable(false)->change();
        });
    }
};
