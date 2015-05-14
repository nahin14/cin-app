<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tasks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('claimID')->unsigned()->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('taskInfo', 2000);
            $table->integer('statusID')->unsigned()->onDelete('cascade');
            $table->date('taskSetDate');
            $table->date('taskDeadlineDate');
            $table->string('notes');
            $table->integer('userID')->unsigned()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('tasks', function($table) {
            $table->foreign('claimID')->references('id')->on('claims');
            $table->foreign('statusID')->references('id')->on('statuses');
            $table->foreign('userID')->references('id')->on('users');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
