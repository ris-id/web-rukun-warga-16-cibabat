<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukturOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_struktur_organisasi', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('ketua_rw')->nullable();
            $table->string('wakil_ketua')->nullable();
            $table->string('sekretaris')->nullable();
            $table->string('bendahara')->nullable();
            $table->string('keamanan')->nullable();
            $table->string('pelayanan_masyarakat')->nullable();
            $table->string('pemuda_olahraga')->nullable();
            $table->string('kesehatan_masyarakat')->nullable();
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
        Schema::dropIfExists('struktur_organisasis');
    }
}
