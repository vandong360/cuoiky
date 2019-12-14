<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatLichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('idUser')->unsigned();
            $table->integer('idSan')->unsigned();
            $table->string('tenKH');
            $table->string('sdt');
            $table->date('date');
            $table->string('time');
            $table->string('note')->nullable();
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idSan')->references('idSan')->on('san');

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
        Schema::dropIfExists('book');
    }
}
