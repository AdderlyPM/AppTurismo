<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaRestarurantesPlatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing restaurant        
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('tipo_restaurante')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('ciudad_municipio')->nullable();
            $table->string('telefono')->nullable();
            $table->string('valoracion')->nullable();
            $table->timestamps();
        });

        // Create table for storing platos
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('precio')->nullable();
            $table->string('tiempo_orden')->nullable();
            $table->timestamps();
        });

        // Create table for associating dish to restaurant (Many-to-Many)
        Schema::create('dish_restaurant', function (Blueprint $table) {
            $table->integer('dish_id')->unsigned();
            $table->integer('restaurant_id')->unsigned();

            $table->foreign('dish_id')->references('id')->on('dishes')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['dish_id', 'restaurant_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dish_restaurant');
        Schema::drop('dishes');
        Schema::drop('restaurants');
    }
}