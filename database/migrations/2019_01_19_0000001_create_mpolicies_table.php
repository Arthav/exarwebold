<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpolicies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->Integer('commission_min')->nullable();
            $table->Integer('commission_max')->nullable();
            $table->string('co_buy')->nullable();
            $table->string('co_sell')->nullable();
            $table->string('out_broke')->nullable();
            $table->string('reference')->nullable();
            $table->Integer('min_sell')->nullable();
            $table->Integer('split_fee')->nullable();
            $table->Integer('co_fee')->nullable();
            $table->Integer('reference_fee')->nullable();
            $table->Integer('delete')->nullable();

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
        Schema::dropIfExists('mpolicies');
    }
}
