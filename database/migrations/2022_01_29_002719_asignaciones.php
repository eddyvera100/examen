<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('asignaciones', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('estudiante_id')->unsigned();
           $table->bigInteger('materia_id')->unsigned();           
           $table->timestamps();
           $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete("cascade");
           $table->foreign('materia_id')->references('id')->on('materias')->onDelete("cascade");
           
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
