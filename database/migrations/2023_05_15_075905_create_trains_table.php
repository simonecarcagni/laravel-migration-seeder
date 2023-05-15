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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 50);
            $table->string('departures_station', 50);
            $table->string('arrival_station', 50);
            $table->date('departures_time');
            $table->date('arrival_station');
            $table->string('train_code', 50);
            $table->tinyInteger('cabin_number');
            $table->boolean('in_time')->default(true);
            $table->boolean('cancelled')->default(false);  

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
        Schema::dropIfExists('trains');
    }
};
