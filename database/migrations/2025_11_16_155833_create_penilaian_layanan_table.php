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
        Schema::create('penilaian_layanan', function (Blueprint $table) {
            $table->id('penilaian_id');
            $table->unsignedBigInteger('pengaduan_id');
            $table->tinyInteger('rating'); // 1-5
            $table->text('feedback')->nullable(); // Wajib ada untuk menghindari error
            $table->timestamps();

            $table->foreign('pengaduan_id')
                  ->references('pengaduan_id')
                  ->on('pengaduan')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_layanan');
    }
};
