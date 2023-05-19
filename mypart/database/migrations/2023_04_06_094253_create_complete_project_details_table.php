<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompleteProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complete_project_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Problam')->nullable();
            $table->string('Solution')->nullable();
            $table->string('Risk')->nullable();
            $table->string('EstimatedPrice')->nullable();
            $table->string('EstimatedTime')->nullable();
            $table->string('Referance')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complete_project_details');
    }
}
