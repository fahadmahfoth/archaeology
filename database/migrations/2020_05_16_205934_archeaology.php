<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Archeaology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archaeology', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_id')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->text('location')->nullable();
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
        Schema::dropIfExists('archaeology');
    }
}
