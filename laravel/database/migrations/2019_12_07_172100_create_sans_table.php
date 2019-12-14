<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san', function (Blueprint $table) {
            $table->bigIncrements('idSan');

            $table->string('tenSan');
            $table->integer('idQuan')->unsigned();
            $table->string('address');
            $table->string('img');

            $table->foreign('idQuan')->references('idQuan')->on('quan');
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
        Schema::dropIfExists('san');
    }
}
