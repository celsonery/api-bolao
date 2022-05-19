<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cup_id')->constrained();
            $table->foreignId('team1_id')->references('id')->on('teams');
            $table->foreignId('team2_id')->references('id')->on('teams');
            $table->string('result')->nullable();
            $table->smallInteger('value1')->nullable();
            $table->smallInteger('value2')->nullable();
            $table->dateTime('time_start');
            $table->dateTime('time_end');
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
        Schema::dropIfExists('games');
    }
};
