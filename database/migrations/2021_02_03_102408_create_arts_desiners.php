<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtsDesiners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arts_desiners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desiner_id')->references('id')->on('desiners');
            $table->foreignId('art_id')->references('id')->on('arts');;
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
        Schema::dropIfExists('arts_desiners');
    }
}
