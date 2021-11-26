<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class registarions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,6) as $value){

            DB::table('registarions')->insert([
                'name' => $faker->name(),
                'mobile'=>$faker->phoneNumber(),
                'email'=>$faker->email()
            ]);
        }
        
    }
}