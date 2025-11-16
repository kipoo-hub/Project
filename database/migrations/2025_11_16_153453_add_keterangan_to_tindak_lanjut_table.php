<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('tindak_lanjut', function (Blueprint $table) {
        $table->text('keterangan')->nullable()->after('pengaduan_id');
        $table->string('status')->nullable()->after('keterangan');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('tindak_lanjut', function (Blueprint $table) {
        $table->dropColumn(['keterangan', 'status']);
    });
}
};
