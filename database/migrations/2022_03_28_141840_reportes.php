<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {

          

            $table->id('id');

            $table->integer('puesto');
            $table->string('nombre_est');
            $table->integer('total_p');
            $table->integer('ingles_p');
            $table->integer('lect_p');
            $table->integer('mate_p');
            $table->integer('soci_p');
            $table->integer('nat_p');
            $table->string('tipo_evalu');
            $table->integer('grado');

            $table->bigInteger('id_instituciones')
                    ->unsigned()
                    ->default(0)
                    ->nullable();
            
            $table->foreign('id_instituciones')
                    ->references('id_ins')
                    ->on('instituciones')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
            
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
        //
    }
};
