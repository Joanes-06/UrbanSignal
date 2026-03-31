<?php

namespace Database\Seeders;

use App\Models\Arrondissement;
use Illuminate\Database\Seeder;

class ArrondissementSeeder extends Seeder
{
    public function run(): void
    {
        $arrondissements = [
            ['name' => 'Avlékété',      'code' => 'OUI-01', 'description' => 'Arrondissement de Avlékété'],
            ['name' => 'Djègbadji',     'code' => 'OUI-02', 'description' => 'Arrondissement de Djègbadji'],
            ['name' => 'Gakpé',         'code' => 'OUI-03', 'description' => 'Arrondissement de Gakpé'],
            ['name' => 'Houakpè-Daho',  'code' => 'OUI-04', 'description' => 'Arrondissement de Houakpè-Daho'],
            ['name' => 'Ouidah I',      'code' => 'OUI-05', 'description' => 'Centre-ville de Ouidah'],
            ['name' => 'Ouidah II',     'code' => 'OUI-06', 'description' => 'Arrondissement de Ouidah II'],
            ['name' => 'Ouidah III',    'code' => 'OUI-07', 'description' => 'Arrondissement de Ouidah III'],
            ['name' => 'Ouidah IV',     'code' => 'OUI-08', 'description' => 'Arrondissement de Ouidah IV'],
            ['name' => 'Pahou',         'code' => 'OUI-09', 'description' => 'Arrondissement de Pahou'],
            ['name' => 'Savi',          'code' => 'OUI-10', 'description' => 'Arrondissement de Savi'],
        ];

        foreach ($arrondissements as $data) {
            Arrondissement::firstOrCreate(['code' => $data['code']], $data);
        }
    }
}
