<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('alias');
            $table->decimal('ceiling height', 5, 2);
            $table->decimal('total_area', 5, 2);
            $table->decimal('kitchen_area', 5, 2);
            $table->decimal('living_space', 5, 2);
            $table->decimal('price', 18, 2);
            $table->text('description');
            $table->tinyInteger('floor');
            $table->tinyInteger('floors');
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
        Schema::dropIfExists('realty');
    }
}
