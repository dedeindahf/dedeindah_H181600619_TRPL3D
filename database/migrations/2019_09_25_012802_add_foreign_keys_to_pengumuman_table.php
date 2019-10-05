<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPengumummanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pengumumman', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_kategori_users00')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kategori_pengumumman_id', 'fk_pengumumman_kategori_pengumumman1')->references('id')->on('kategori_pengumumman')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pengumummman', function(Blueprint $table)
		{
			$table->dropForeign('fk_kategori_users00');
			$table->dropForeign('fk_pengumumman_kategori_pengumumman1');
		});
	}

}
