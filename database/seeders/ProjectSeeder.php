<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects =
            DB::table('projects')->insert(
                [
                    'name' => 'Buona Vista',
                    'construction' => 'Edificio',
                    'location' => 'Rambla de Mercedes Soriano',
                    'floors' => 4,
                    'apartments' => 8,
                    'delivery_date' => 2022,
                    'availability' => '75% VENDIDO',
                    'order' => 1
                ]
            );
        DB::table('projects')->insert([
            'name' => 'Moby Mercedes',
            'construction' => 'Edificio',
            'location' => 'Rambla de Mercedes Soriano',
            'floors' => 7,
            'apartments' => 30,
            'amanities' => 'Lavandería, gimnasio, barbacoa, sala de co-work y terraza',
            'delivery_date' => 2024,
            'availability' => 'Unidades disponibles',
            'order' => 2
        ]);
        DB::table('projects')->insert([
            'name' => 'Moby Biarritz',
            'construction' => 'Edificio',
            'location' => 'Montevideo, Biarritz',
            'floors' => 10,
            'apartments' => 8,
            'delivery_date' => 2024,
            'availability' => '80% VENDIDO',
            'order' => 3
        ]);
        DB::table('projects')->insert([
            'name' => 'Punta Carretas I',
            'construction' => 'Edificio',
            'location' => 'Punta Carretas, Montevideo, Uruguay',
            'floors' => 3,
            'apartments' => 11,
            'delivery_date' => 2024,
            'availability' => 'Unidades disponibles',
            'order' => 4
        ]);
        DB::table('projects')->insert([
            'name' => 'Complejo Picasso',
            'construction' => 'Complejo',
            'location' => 'Centro de Mercedes Soriano',
            'floors' => 2,
            'apartments' => 4,
            'commercial_premises' => 3,
            'delivery_date' => 2022,
            'availability' => '100% VENDIDO',
            'order' => 5
        ]);
        DB::table('projects')->insert([
            'name' => 'Terrazas del Hum',
            'construction' => 'Edificio',
            'location' => 'Rambla de Mercedes Soriano',
            'floors' => 4,
            'apartments' => 8,
            'delivery_date' => 2022,
            'availability' => '100% VENDIDO',
            'order' => 6
        ]);
    }
}
