<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_komentar_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->longText('komentar');
            $table->unsignedBigInteger('id_kegiatan');
            $table->foreign('id_kegiatan')->references('id')->on('tb_kegiatan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_kegiatans');
    }
}
