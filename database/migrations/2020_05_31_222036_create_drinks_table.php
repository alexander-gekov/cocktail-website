<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('alcoholic');
            $table->string('glass');
            $table->text('instructions');
            $table->string('image');
            $table->string('ingredient1');
            $table->string('ingredient2')->nullable();
            $table->string('ingredient3')->nullable();
            $table->string('ingredient4')->nullable();
            $table->string('ingredient5')->nullable();
            $table->string('ingredient6')->nullable();
            $table->string('measure1');
            $table->string('measure2')->nullable();
            $table->string('measure3')->nullable();
            $table->string('measure4')->nullable();
            $table->string('measure5')->nullable();
            $table->string('measure6')->nullable();
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
        Schema::dropIfExists('drinks');
    }
}
