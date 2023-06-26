<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'comuna' => '12'
            ],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
