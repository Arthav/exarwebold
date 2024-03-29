<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mroles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('level')->nullable();
            $table->string('delet')->nullable();
            $table->unsignedInteger('mpolicie_id')->nullable();
            $table->foreign('mpolicie_id')->references('id')->on('mpolicies')->onUpdate('cascade')->onDelete('cascade');
            

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
        Schema::dropIfExists('mroles');
    }
}
