<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msellers', function (Blueprint $table) {
            $table->increments('id');
            $table->int('type')->nullable();
            $table->int('delet')->nullable();

            $table->unsignedInteger('id_dtrans')->nullable();
            $table->foreign('id_dtrans')->references('id')->on('dtransactions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_users')->nullable();
            $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('msellers');
    }
}
