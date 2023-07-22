<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'created_at'    => date('Y-m-d H:i:s'),
            'email'         => $faker->unique()->safeEmail,
            'name'          => $faker->name,
            'username'      => 'admin',
            'password'      => Hash::make('mitsuha')
        ]);
    }
}
