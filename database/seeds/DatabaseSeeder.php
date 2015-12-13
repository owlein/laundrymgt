<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
 
		$this->call('CustomerTableSeeder');
		$this->call('ClothesTableSeeder');
		$this->call('OrdersTableSeeder');

        Model::reguard();
    }
}