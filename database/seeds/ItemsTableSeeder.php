<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Item::truncate();
        
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            App\Item::create([
                'name' => 'Item ' . ($i + 1),
                'price' => $i + 1,
                'price_sale' => $i + 1.5,
                'note' => 'Note ' . ($i + 1),
            ]);
        }
    }
}
