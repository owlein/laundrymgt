<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaundryTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name')->default('');
			$table->string('address')->default('');
			$table->string('contact_no')->default('');
		});
 
		Schema::create('clothes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('quantity')->default(0);
			$table->text('description')->default('');
			$table->enum('type', array('shirt', 'skirt', 'jacket', 'pants', 'towel', 'blanket', 'underwear', 'dress', 'coat', 'others'));
		});
 
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('customer_id')->unsigned()->default(0);
			$table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
			$table->integer('clothes_id')->unsigned()->default(0);
			$table->foreign('clothes_id')->references('id')->on('clothes')->onDelete('cascade');
			$table->string('receipt_no')->default('');
			$table->decimal('price', 5, 2)->default(0.00);
			$table->decimal('weight', 5, 2)->default(0.00);
			$table->enum('type', array('dry_clean', 'handwash', 'normal'));
			$table->enum('status', array('accepted', 'processing', 'for_pickup', 'done'));
			$table->timestamp('start_date');
			$table->timestamp('delivery_date');
			$table->boolean('with_press')->default(false);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('orders');
		Schema::drop('customers');
		Schema::drop('clothes');
    }
}
