<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->delete();

        DB::table('schedules')->insert([
            ['time' => '10:00', 'professional_id' => 1],
            ['time' => '11:00', 'professional_id' => 1],
            ['time' => '12:00', 'professional_id' => 1],
            ['time' => '13:00', 'professional_id' => 1],
            ['time' => '16:00', 'professional_id' => 1],
            ['time' => '17:00', 'professional_id' => 1],
            ['time' => '18:00', 'professional_id' => 1],
            ['time' => '19:00', 'professional_id' => 1],
            ['time' => '10:00', 'professional_id' => 2],
            ['time' => '11:00', 'professional_id' => 2],
            ['time' => '12:00', 'professional_id' => 2],
            ['time' => '13:00', 'professional_id' => 2],
            ['time' => '16:00', 'professional_id' => 2],
            ['time' => '17:00', 'professional_id' => 2],
            ['time' => '18:00', 'professional_id' => 2],
            ['time' => '19:00', 'professional_id' => 2],
            ['time' => '10:00', 'professional_id' => 3],
            ['time' => '11:00', 'professional_id' => 3],
            ['time' => '12:00', 'professional_id' => 3],
            ['time' => '13:00', 'professional_id' => 3],
            ['time' => '16:00', 'professional_id' => 3],
            ['time' => '17:00', 'professional_id' => 3],
            ['time' => '18:00', 'professional_id' => 3],
            ['time' => '19:00', 'professional_id' => 3],
            ['time' => '10:00', 'professional_id' => 4],
            ['time' => '11:00', 'professional_id' => 4],
            ['time' => '12:00', 'professional_id' => 4],
            ['time' => '13:00', 'professional_id' => 4],
            ['time' => '16:00', 'professional_id' => 4],
            ['time' => '17:00', 'professional_id' => 4],
            ['time' => '18:00', 'professional_id' => 4],
            ['time' => '19:00', 'professional_id' => 4],
        ]);
    }
}
