<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            ['plan_name' => 'Budget Plan', 'code' => 'BASIC'],
            ['plan_name' => 'Advance Plan', 'code' => 'ADVANCE'],
            ['plan_name' => 'Smart Plan', 'code' => 'SMART'],
            ['plan_name' => 'Pro Plan', 'code' => 'PRO'],
            // Add more plans here
        ];

        DB::table('plans')->insert($plans);
    }
}