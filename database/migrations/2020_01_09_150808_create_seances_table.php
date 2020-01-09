<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cours_id');
            $table->unsignedBigInteger('salle_id')->nullable();
            $table->unsignedBigInteger('ens_id')->nullable();
            $table->date('seance_begin');
            $table->date('seance_end');
            $table->string('day');
            $table->unsignedInteger('hours');

            // Foreign and unique key
            $table->foreign('cours_id')->references('id')->on('cours')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ens_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('seances');
    }
}
