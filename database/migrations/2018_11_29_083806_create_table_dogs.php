<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();;
            $table->string('nombre');
            $table->string('sexo');
            $table->string('raza');
            $table->integer('edad');
            $table->string('descripcion');
            $table->integer('codigo_postal');
            $table->string('avatar');
            $table->string('fotos');
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
        Schema::dropIfExists('dogs');
    }
}
