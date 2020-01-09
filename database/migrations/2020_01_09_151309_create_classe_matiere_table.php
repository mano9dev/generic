<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseMatiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_matiere', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('matiere_id');
            $table->unsignedBigInteger('promo_id');
            $table->unsignedInteger('semestre');
            $table->string('fil_codeFil');
            $table->unsignedInteger('masse_horaire');
            $table->boolean('programmer')->default(false);

            // Foreign and unique key
            $table->unique(['classe_id','matiere_id','promo_id']);
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promo_id')->references('id')->on('promotions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fil_codeFil')->references('codeFil')->on('filieres')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('classe_matiere');
    }
}
