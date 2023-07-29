<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassingGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passing_grades')->insert([
            'created_at'    => date('Y-m-d H:i:s'),
            'name'          => 'Wibu kemarin sore',
            'passing_grade' => 6,
        ]);

        DB::table('passing_grades')->insert([
            'created_at'    => date('Y-m-d H:i:s'),
            'name'          => 'Wibu bau bawang',
            'passing_grade' => 9,
        ]);

        DB::table('passing_grades')->insert([
            'created_at'    => date('Y-m-d H:i:s'),
            'name'          => 'Anjing! Tobat tolol!',
            'passing_grade' => 11,
        ]);
    }
}
