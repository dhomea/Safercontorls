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
        Schema::create('detels_artisans', function (Blueprint $table) {
            $table->id();
            $table->text('explain')->nullable();
            $table->text('informationtrip')->nullable();
            $table->text('location')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('Montion_id');
            $table->foreign('Montion_id')->references('id')->on('montion_tourist_places')->cascadeOnDelete();
            $table->string('contentourist');
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
        Schema::dropIfExists('detels_artisans');
    }
};
