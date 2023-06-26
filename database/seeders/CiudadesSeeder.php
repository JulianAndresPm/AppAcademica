<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = [
            [
                'codciudad' => '10',
                'nomciudad' => 'Medellin',
                'departamento' => '10'
            ],
            [
                'codciudad' => '20',
                'nomciudad' => 'Bogota',
                'departamento' => '20'
            ],
            [
                'codciudad' => '30',
                'nomciudad' => 'Cali',
                'departamento' => '30'
            ],
            [
                'codciudad' => '40',
                'nomciudad' => 'Bolivar',
                'departamento' => '40'
            ],
            [
                'codciudad' => '50',
                'nomciudad' => 'Madrid',
                'departamento' => '50'
            ],
        ];

        DB::table('ciudades')->insert($ciudades);
    }
}

