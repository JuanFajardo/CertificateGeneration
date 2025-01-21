<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen', 255)->nullable();
            $table->string('titulo', 255);
            $table->text('descripcion_corta')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->integer('carga_horario')->nullable();
            $table->decimal('inversion', 10, 2)->nullable();
            $table->enum('modalidad', ['presencial', 'virtual', 'mixta'])->nullable();
            $table->string('horarios', 255)->nullable();
            $table->date('fecha_limite')->nullable();
            $table->string('correo', 255)->nullable();
            $table->string('celular', 15)->nullable();
            $table->text('descripcion_larga')->nullable();
            $table->text('requisitos')->nullable();
            $table->unsignedBigInteger('id_docente');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_docente')->references('id')->on('docentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
