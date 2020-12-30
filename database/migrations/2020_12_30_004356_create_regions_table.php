<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('factbook');
            $table->integer('numnations');
            $table->text('nations');
            $table->string('delegate');
            $table->integer('delegatevotes');
            $table->string('delegateauth');
            $table->string('founder');
            $table->string('founderauth');
            $table->string('officers');
            $table->string('power');
            $table->string('flag');
            $table->string('embassies');
            $table->integer('lastupdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
