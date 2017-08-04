<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 30);
            $table->string('apellidos', 50);
            $table->string('dni', 9);
            $table->string('direccion', 60);
            $table->string('cp', 5);
            $table->string('poblacion', 30);
            $table->string('provincia', 15);
            $table->string('tfijo', 20);
            $table->string('tmovil', 20);
            $table->string('email', 100);
            $table->boolean('activo');
            $table->boolean('legal');
            $table->date('fecha');
            $table->string('insercion',15);
            $table->string('modificacion',15);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}
