<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengumummanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengumumman', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->text('isi', 65535)->nullable();
			$table->bigInteger('users_id')->unsigned()->index('fk_kategori_users_idx');
			$table->timestamps();
			$table->integer('kategori_pengumumman_id')->unsigned()->index('fk_pengumumman_kategori_pengumumman1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengumumman');
	}

}
