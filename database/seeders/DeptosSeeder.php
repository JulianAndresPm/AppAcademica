<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DeptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = [
            [
                'coddepto' => '10',
                'nomdepto' => 'Antioquia'
            ],
            [
                'coddepto' => '20',
                'nomdepto' => 'Bogotá D.C.'
            ],
            [
                'coddepto' => '30',
                'nomdepto' => 'Valle del Cauca'
            ],
            [
                'coddepto' => '40',
                'nomdepto' => 'Santander'
            ],
            [
                'coddepto' => '50',
                'nomdepto' => 'Cundinamarca'
            ],
        ];

        DB::table('departamentos')->insert($departamentos);
    }
}
