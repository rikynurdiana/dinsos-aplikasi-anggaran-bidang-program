<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $faker = Faker::create();
         foreach (range(1,20) as $index) {
	        DB::table('members')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'created_at' => $faker->dateTime(),
	            'updated_at' => $faker->dateTime(),
	        ]);
        }
     }
}
