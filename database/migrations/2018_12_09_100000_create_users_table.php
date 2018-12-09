<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('id', true);
			$table->integer('user_type')->unsigned()->default(0);
			$table->string('name');
			$table->string('email');
			$table->timestamp('email_verified_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('remember_token')->nullable();
			$table->string('password', 128);
			$table->timestamps();
		});
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
