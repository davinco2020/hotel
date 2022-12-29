<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRysasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rysas', function (Blueprint $table) {
            $table->id();
            $table ->string('name');
            $table ->string('phonenumber');
            $table ->string('skill');
            $table ->string('vision');
            $table ->string('mission');
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
        Schema::dropIfExists('rysas');
    }
}
