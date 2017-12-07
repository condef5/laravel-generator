<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePonenciasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('ponente_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ponente_id')->references('id')->on('ponentes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ponencias');
    }
}
