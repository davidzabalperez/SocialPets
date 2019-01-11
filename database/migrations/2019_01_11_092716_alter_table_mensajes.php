<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableMensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensajes', function (Blueprint $table) {
            // 
            $table->foreign('id_receiver')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('id_sender')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensajes', function (Blueprint $table) {
            //
            $table->dropForeign('mensajes_id_receiver_foreign');
            $table->dropForeign('mensajes_id_sender_foreign');
            $table->dropColumn('id_receiver');
            $table->dropColumn('id_sender');
        });
    }
}
