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
            // Tambahkan kolom 'lampiran' (nullable)
            $table->string('lampiran')->nullable()->after('deskripsi');

            // Tambahkan kolom 'is_anonim'
            $table->boolean('is_anonim')->default(false)->after('lampiran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            // Hapus dalam urutan terbalik
            $table->dropColumn('is_anonim');
            $table->dropColumn('lampiran');
        });
    }
};
