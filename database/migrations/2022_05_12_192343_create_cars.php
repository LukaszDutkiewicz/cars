<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('cars');
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('vin')->unique()->nullable();
            $table->string('description')->nullable();
            $table->string('color')->nullable();
            $table->integer('price')->nullable()->unsigned();
            $table->string('registration')->nullable();
            $table->date('registration_date')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
