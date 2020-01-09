<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fil_codeFil');
            $table->string('codeClasse');
            $table->string('libelleClasse');
            $table->unsignedInteger('niveau');
            $table->string('groupe')->nullable();
            $table->string('specialite')->nullable();
            $table->unsignedBigInteger('promo_id');
            $table->unsignedInteger('effectif');

            // Foreign and unique key
            $table->foreign('fil_codeFil')->references('codeFil')->on('filieres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promo_id')->references('id')->on('promotions')->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['codeClasse','promo_id']);

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
        Schema::dropIfExists('classes');
    }
}
