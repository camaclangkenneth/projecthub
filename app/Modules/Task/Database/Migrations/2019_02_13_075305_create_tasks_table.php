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
            $table->string('title');
            $table->string('description');
            $table->string('type');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('project_id');
            $table->timestamps();
            
            // Cascade on Delete
            $table->foreign('created_by')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('updated_by')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->foreign('project_id')
                    ->references('id')->on('projects')
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
        Schema::dropIfExists('tasks');
    }
}
