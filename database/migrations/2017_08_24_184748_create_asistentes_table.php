<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsistentesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('universidad');
            $table->integer('ponencia_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ponencia_id')->references('id')->on('ponencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asistentes');
    }
}
