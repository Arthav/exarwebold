<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpolicysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpolicys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->int('commission_min')->nullable();
            $table->int('commission_max')->nullable();
            $table->string('co_buy')->nullable();
            $table->string('co_sell')->nullable();
            $table->string('out_broke')->nullable();
            $table->string('reference')->nullable();
            $table->int('min_sell')->nullable();
            $table->int('split_fee')->nullable();
            $table->int('co_fee')->nullable();
            $table->int('reference_fee')->nullable();
            $table->int('delete')->nullable();

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
        Schema::dropIfExists('mpolicys');
    }
}
