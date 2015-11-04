<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixDefaultsAccessories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE `'.DB::getTablePrefix().'accessories` MODIFY `order_number` varchar(255) DEFAULT NULL;');

		DB::statement('ALTER TABLE `'.DB::getTablePrefix().'consumables` MODIFY `order_number` varchar(255) DEFAULT NULL;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		DB::statement('ALTER TABLE `'.DB::getTablePrefix().'accessories` MODIFY `order_number` varchar(255);');
		DB::statement('ALTER TABLE `'.DB::getTablePrefix().'consumables` MODIFY `order_number` varchar(255);');
	}

}