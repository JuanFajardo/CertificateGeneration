<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_curso')->default(0);
            $table->string('ci', 20)->unique();
            $table->string('nombre', 100)->nullable();
            $table->string('paterno', 100)->nullable();
            $table->string('materno', 100)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('departamento', 100)->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->string('correo', 255);
            $table->string('celular', 15)->nullable();
            $table->string('profesion', 255)->nullable();
            $table->boolean('aceptado')->default(false);
            $table->timestamps();

            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
