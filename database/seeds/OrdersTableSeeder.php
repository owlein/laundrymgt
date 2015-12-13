
<?php
 
use Illuminate\Database\Seeder;
 
class OrdersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('orders')->delete();
 
        $orders = array(
            ['id' => 1, 'customer_id' => 1, 'clothes_id' => 1, 'receipt_no' => "241234", 'price' => 100.00, 'weight' => 2.5, 'type' => "normal", 'status' => "accepted", 'start_date' => new DateTime, 'delivery_date' => new DateTime, 'with_press' => false],
            ['id' => 2, 'customer_id' => 2, 'clothes_id' => 2, 'receipt_no' => "241234", 'price' => 100.00, 'weight' => 2.5, 'type' => "normal", 'status' => "accepted", 'start_date' => new DateTime, 'delivery_date' => new DateTime, 'with_press' => false],
            ['id' => 3, 'customer_id' => 3, 'clothes_id' => 3, 'receipt_no' => "241234", 'price' => 100.00, 'weight' => 2.5, 'type' => "normal", 'status' => "accepted", 'start_date' => new DateTime, 'delivery_date' => new DateTime, 'with_press' => false],
        );
 
        // Uncomment the below to run the seeder
        DB::table('orders')->insert($orders);
    }
 
}
