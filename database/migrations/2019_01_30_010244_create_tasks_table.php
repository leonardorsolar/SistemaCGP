<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('typeproject_id');
            $table->unsignedInteger('class_id');
            $table->text('body');
            $table->date('date_ini');
            $table->boolean('completed')->default(false);
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('typeproject_id')->references('id')->on('typeprojects')->onDelete('cascade');
            $table->foreign('areaproject_id')->references('id')->on('areaprojects')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
