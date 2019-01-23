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
            $table->Integer('type')->nullable();
            $table->Integer('delet')->nullable();

            $table->unsignedInteger('dtransaction_id')->nullable();
            $table->foreign('dtransaction_id')->references('id')->on('dtransactions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
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
