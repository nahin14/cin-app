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

        DB::table('tasks')->insert(array(
            array('slug' => 'Task 1', 'claimID' =>'1', 'taskInfo' => 'Follow up with Dave at Churchill regarding...', 'statusID' => '3',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-02', 'notes' => '...', 'userID' => '2'),
            array('slug' => 'Task 2', 'claimID' =>'1', 'taskInfo' => 'Email client, Tomas Hall regarding...', 'statusID' => '4',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-02', 'notes' => '...', 'userID' => '2'),
            array('slug' => 'Task 3', 'claimID' =>'1', 'taskInfo' => 'Call...', 'statusID' => '3', 'taskSetDate' => '2015-01-01',
                'taskDeadlineDate' => '2015-01-05', 'notes' => '...', 'userID' => '2'),
            array('slug' => 'Task 4', 'claimID' =>'1', 'taskInfo' => 'Add Insurer details', 'statusID' => '4', 'taskSetDate' => '2015-01-01',
                'taskDeadlineDate' => '2015-01-07', 'notes' => '...', 'userID' => '3'),
            array('slug' => 'Task 5', 'claimID' =>'1', 'taskInfo' => 'Add client car details', 'statusID' => '2',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-12', 'notes' => '...', 'userID' => '2'),
            array('slug' => 'Task 6', 'claimID' =>'1', 'taskInfo' => 'Add evidence to claim', 'statusID' => '1',
                'taskSetDate' => '2015-01-01', 'taskDeadlineDate' => '2015-01-12', 'notes' => '...', 'userID' => '4'),
        ));
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
