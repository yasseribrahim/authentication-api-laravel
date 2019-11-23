<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Let's clear the users table first
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        App\User::truncate();
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

//        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('toptal');

        App\User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        // And now let's generate a few dozen users for our app:
//        for ($i = 0; $i < 10; $i++) {
//            App\User::create([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'password' => $password,
//            ]);
//        }
    }

}
