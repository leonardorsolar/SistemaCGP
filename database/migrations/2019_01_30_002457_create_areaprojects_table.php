<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_projects', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('user_id');
            $table->unsignedInteger('type_project_id');
            $table->string('name');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_project_id')->references('id')->on('type_projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_projects');
    }
}
