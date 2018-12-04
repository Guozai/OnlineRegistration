<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->timestamps();
        });

        Schema::table('registrations', function ($table) {
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');
        });

        Schema::table('results', function ($table) {
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
