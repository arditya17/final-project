<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_magang');
            $table->string('nama_perusahaan');
            $table->string('nama_mhs1');
            $table->string('nama_mhs2');
            $table->string('nama_mhs3');
            $table->string('nama_mhs4');
            $table->string('nama_mhs5');
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
        Schema::dropIfExists('magang');
    }
}
