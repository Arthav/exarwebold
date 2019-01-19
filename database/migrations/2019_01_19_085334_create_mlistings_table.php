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
            $table->int('tipe_unit')->default('0');
            $table->int('total_unit')->default('0');
            $table->int('available_unit')->default('0');
            $table->string('jenis_properti')->nullable();
            $table->int('luas_bangunan')->default('0');
            $table->int('luas_tanah')->default('0');
            $table->int('tinggi')->default('0');
            $table->int('lantai')->default('0');
            $table->string('lokasi')->nullable();
            $table->int('kamar_mandi')->default('0');
            $table->int('kamar_tidur')->default('0');
            $table->string('arah_properti')->default('0');
            $table->longText('spesifikasi')->nullable();
            $table->string('kota')->nullable();
            $table->int('listrik')->nullable();
            $table->int('delet')->nullable();
            $table->int('sold')->default('0');;
            $table->unsignedInteger('id_users')->nullable();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_developers')->nullable();
            $table->foreign('id_developers')->references('id')->on('mdevelopers')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_users')->nullable();
            $table->foreign('id_listings')->references('id')->on('mlistings')->onUpdate('cascade')->onDelete('cascade');
       
            
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
