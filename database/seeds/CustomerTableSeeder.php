
<?php
 
use Illuminate\Database\Seeder;
 
class CustomerTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('customers')->delete();
 
        $customers = array(
            ['id' => 1, 'name' => 'Customer 1', 'address' => 'Makati City', 'contact_no' => "12354354"],
            ['id' => 2, 'name' => 'Customer 2', 'address' => 'Manila', 'contact_no' => "634634"],
            ['id' => 3, 'name' => 'Customer 3', 'address' => 'Quezon City', 'contact_no' => "87565434"],
        );
 
        // Uncomment the below to run the seeder
        DB::table('customers')->insert($customers);
    }
 
}