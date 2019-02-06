<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description');
            $table->string('status');
            $table->datetime('deadline');
            $table->unsignedInteger('manager_id')->nullable();
            $table->unsignedInteger('client_id')->nullable();
            $table->timestamps();

            $table->foreign('manager_id')
                    ->references('id')->on('users');
            $table->foreign('client_id')
                    ->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
