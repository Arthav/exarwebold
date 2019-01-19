<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMbonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mbonus', function (Blueprint $table) {
            $table->increments('id');
            $table->int('bonus')->nullable();
            $table->string('nama_bonus')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->int('delet')->default('0');
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
        Schema::dropIfExists('mbonus');
    }
}
