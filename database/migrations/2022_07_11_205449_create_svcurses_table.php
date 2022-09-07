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
        Schema::create('svcurses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vCurse');
            $table->unsignedBigInteger('id_schedule');//varios horarios
            //
            $table->foreign('id_vCurse')
                ->references('id')
                ->on('vcurses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_schedule')
                ->references('id')
                ->on('schedules')
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
        Schema::dropIfExists('svcurses');
    }
};
