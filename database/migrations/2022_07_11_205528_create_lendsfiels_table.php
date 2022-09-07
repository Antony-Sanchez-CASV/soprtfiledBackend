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
        Schema::create('lendsfiels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_scheduleSField');//horario de prestamo
            
            $table->unsignedBigInteger('id_user');//morador
            
            $table->unsignedBigInteger('id_state');//estado
            
            $table->date('dateLend');//dia de prestamo en el calendario

            $table->foreign('id_scheduleSField')
                   ->references('id')
                   ->on('ssfields')
                   ->onDelete('cascade')
                   ->onUpdate('cascade'); 
            
            $table->foreign('id_user')
                   ->references('id')
                   ->on('users')
                   ->onDelete('cascade')
                   ->onUpdate('cascade'); 
            
            $table->foreign('id_state')
                   ->references('id')
                   ->on('states')
                   ->onDelete('cascade')
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
        Schema::dropIfExists('lendsfiels');
    }
};
