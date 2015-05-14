<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->string('slug')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->integer('roleID')->unsigned()->onDelete('cascade');
			$table->rememberToken();
			$table->timestamps();
		});

        Schema::table('users', function($table) {
            $table->foreign('roleID')->references('id')->on('roles')->onDelete('cascade');
        });

        DB::table('users')->insert(array(
            array('name' => 'Nahin Miah', 'slug' => 'nahin14',
                'email' => 'nahinmiah94@gmail.com', 'password' => Hash::make('password'), 'roleID' => '1'),
            array('name' => 'Flavio Gomes', 'slug' => 'flavio94',
                'email' => 'gomesf94@gmail.com', 'password' => Hash::make('password'), 'roleID' => '2'),
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
