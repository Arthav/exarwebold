<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtransactions', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('co_broke')->nullable();
            $table->Integer('co_sell')->nullable();
            $table->Integer('co_buy')->nullable();
            $table->Integer('reference')->nullable();
            $table->bigInteger('close_price')->nullable();
            $table->Integer('final_commission')->nullable();
            $table->Integer('delet')->default('0');
            $table->unsignedInteger('mtransaction_id')->nullable();
            $table->foreign('mtransaction_id')->references('id')->on('mtransactions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('mlisting_id')->nullable();
            $table->foreign('mlisting_id')->references('id')->on('mlistings')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('dtransactions');
    }
}
