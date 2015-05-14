<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateClaimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('claims', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug');
            $table->integer('claimTypeID')->unsigned()->onDelete('cascade');
            $table->date('claimDate');
            $table->integer('statusID')->unsigned()->onDelete('cascade');
            $table->string('claimInfo', 2000);
            $table->string('notes', 2000);
            $table->integer('clientID')->unsigned()->onDelete('cascade');
            $table->integer('clientTypeID')->unsigned()->onDelete('cascade');
            $table->integer('userID')->unsigned()->onDelete('cascade');
            $table->integer('solicitorID')->unsigned()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('claims', function($table) {
            $table->foreign('claimTypeID')->references('id')->on('claim_types');
            $table->foreign('statusID')->references('id')->on('statuses');
            $table->foreign('clientID')->references('id')->on('clients');
            $table->foreign('clientTypeID')->references('id')->on('client_types');
            $table->foreign('userID')->references('id')->on('users');
            $table->foreign('solicitorID')->references('id')->on('solicitors');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('claims');
	}

}
