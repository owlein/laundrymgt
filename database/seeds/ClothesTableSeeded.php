
<?php
 
use Illuminate\Database\Seeder;
 
class ClothesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('clothes')->delete();
 
        $clothes = array(
            ['id' => 1, 'quantity' => 1, 'description' => 'Dress', 'type' => "dress"],
            ['id' => 2, 'quantity' => 2, 'description' => 'Pants', 'type' => "pants"],
            ['id' => 3, 'quantity' => 3, 'description' => 'Others', 'type' => "others"],
        );
 
        // Uncomment the below to run the seeder
        DB::table('clothes')->insert($clothes);
    }
 
}
