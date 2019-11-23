<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            for ($j = 0; $j < 6; $j++) {
                App\OrderDetails::create([
                    'order_id' => $i + 1,
                    'item_id' => $j + 1,
                    'price' => $i + 1,
                    'price_sale' => $i + 1.5
                ]);
            }
        }
    }

}
