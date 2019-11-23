<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            App\Order::create([
                'user_id' => 1,
                'customer_id' => 2,
                'discount' => $i + 1
            ]);
        }
    }
}
