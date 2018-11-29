<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerfilPerros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_perros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('sexo');
            $table->string('raza');
            $table->integer('edad');
            $table->string('descripcion');
            $table->string('foto_perfil');
            $table->string('foto');
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
        Schema::dropIfExists('perfil_perros');
    }
}
