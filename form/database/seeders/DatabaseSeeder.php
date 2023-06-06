<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kiwi',
            'email' => 'kiwi@gmail.com',
            'password' => Hash::make('123'),
        ]);


        $faker = Faker::create('en_US');

        foreach(range(1, 6) as $_) {
            
            DB::table('messages')->insertGetId([
                'name' => $faker->firstNameMale,
                'email' => $faker->email,
                'message' => $faker->text($maxNbChars = 50), 
                'created_at' => $faker->dateTime($max = 'now')
            ]);

            
        }
    }
}
