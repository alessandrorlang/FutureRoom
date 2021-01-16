<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('room_categoryID')->unsigned();
            $table->foreign('room_categoryID')->references('id')->on('room_categories')->onDelete('cascade');
            $table->string('room_name');
            $table->string('photo');
            $table->text('description');
            $table->string('designer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_lists');
    }
}
