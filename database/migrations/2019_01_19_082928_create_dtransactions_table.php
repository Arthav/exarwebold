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
            $table->increments('id')();
            $table->int('co_broke')->nullable();
            $table->int('co_sell')->nullable();
            $table->int('co_buy')->nullable();
            $table->int('reference')->nullable();
            $table->bigInteger('close_price')->nullable();
            $table->int('final_commission')->nullable();
            $table->int('delet')->default('0');
            $table->unsignedInteger('id_transactions')->nullable();
            $table->foreign('id_transactions')->references('id')->on('transactions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('id_listings')->nullable();
            $table->foreign('id_listings')->references('id')->on('listings')->onUpdate('cascade')->onDelete('cascade');
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
