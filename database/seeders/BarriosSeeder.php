<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barrios = [
            [
                'codbarrio' => '10',
                'nombarrio' => 'Chambu',
                'estbarrio' => '1',
                'comuna' => '5'
            ],
            [
                'codbarrio' => '20',
                'nombarrio' => 'La minga',
                'estbarrio' => '1',
                'comuna' => '5'
            ],
            [
                'codbarrio' => '30',
                'nombarrio' => 'Belen',
                'estbarrio' => '1',
                'comuna' => '5'
            ],
            [
                'codbarrio' => '40',
                'nombarrio' => '12 de octubre',
                'estbarrio' => '1',
                'comuna' => '5'
            ],
            [
                'codbarrio' => '50',
                'nombarrio' => 'San Diego Norte',
                'estbarrio' => '5',
                'comuna' => '3'
            ],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
