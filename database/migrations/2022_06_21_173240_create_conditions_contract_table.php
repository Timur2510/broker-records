<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionsContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions_contract', function (Blueprint $table) {
            $table->id();
            $table->string('choice');
            $table->integer('limit_start');
            $table->integer('percent_start');
            $table->integer('limit_max');
            $table->integer('percent_max');
            $table->integer('percent_super_max');
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
        Schema::dropIfExists('conditions_contract');
    }
}
