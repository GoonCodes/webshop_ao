<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('published')->default(0);
			$table->float('rating_cache', 2, 1)->unsigned()->default(3.0);
			$table->integer('rating_count')->unsigned()->default(0);
			$table->string('name');
			$table->float('pricing', 9)->unsigned()->default(0.00);
			$table->string('short_description');
			$table->text('long_description', 65535);
			$table->string('icon');
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
		Schema::drop('products');
	}

}
