<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_user');
            $table->foreign('kode_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_file');
            $table->string('lokasi_file');
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
        Schema::dropIfExists('sertifs');
    }
}
