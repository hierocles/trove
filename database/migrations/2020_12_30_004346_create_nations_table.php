<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('type');
            $table->string('fullname');
            $table->string('motto');
            $table->string('category');
            $table->string('unstatus');
            $table->text('endorsements');
            $table->integer('issues_answered');
            $table->text('freedom');
            $table->string('region');
            $table->integer('population');
            $table->integer('tax');
            $table->string('animal');
            $table->string('currency');
            $table->string('demonym');
            $table->string('demonym2');
            $table->string('demonym2plural');
            $table->string('flag');
            $table->string('majorindustry');
            $table->string('govtpriority');
            $table->text('govt');
            $table->string('founded');
            $table->integer('firstlogin');
            $table->integer('lastlogin');
            $table->integer('lastactivity');
            $table->string('influence');
            $table->text('freedomscores');
            $table->string('publicsector');
            $table->text('deaths');
            $table->string('leader');
            $table->string('capital');
            $table->string('religion');
            $table->string('factbooks');
            $table->string('dispatches');
            $table->integer('dbid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nations');
    }
}
