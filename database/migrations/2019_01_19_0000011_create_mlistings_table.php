<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlistingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlistings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('jenis_list')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('commission')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('no_pemilik')->nullable();
            $table->Integer('tipe_unit')->default('0');
            $table->Integer('total_unit')->default('0');
            $table->Integer('available_unit')->default('0');
            $table->string('jenis_properti')->nullable();
            $table->Integer('luas_bangunan')->default('0');
            $table->Integer('luas_tanah')->default('0');
            $table->Integer('tinggi')->default('0');
            $table->Integer('lantai')->default('0');
            $table->string('lokasi')->nullable();
            $table->Integer('kamar_mandi')->default('0');
            $table->Integer('kamar_tidur')->default('0');
            $table->string('arah_properti')->default('0');
            $table->longText('spesifikasi')->nullable();
            $table->string('kota')->nullable();
            $table->Integer('listrik')->nullable();
            $table->string('legalitas')->nullable();
            $table->Integer('delet')->nullable();
            $table->Integer('sold')->default('0');;
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('mdeveloper_id')->nullable();
            $table->foreign('mdeveloper_id')->references('id')->on('mdevelopers')->onUpdate('cascade')->onDelete('cascade');
                      
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
        Schema::dropIfExists('mlistings');
    }
}
