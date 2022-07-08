<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarInfoPentingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_komentar_info_penting', function (Blueprint $table) {
            $table->id();
            $table->longText('komentar');
            $table->unsignedBigInteger('id_info');
            $table->foreign('id_info')->references('id')->on('tb_info_penting')->onDelete('cascade');
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
        Schema::dropIfExists('komentar_info_pentings');
    }
}
