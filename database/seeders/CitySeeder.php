<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'Araras']);
        City::create(['name' => 'Bambuí']);
        City::create(['name' => 'Caconde']);
        City::create(['name' => 'Divinolândia']);
        City::create(['name' => 'Espírito Santo do Pinhal']);
        City::create(['name' => 'Franca']);
        City::create(['name' => 'General Salgado']);
        City::create(['name' => 'Hortolândia']);
        City::create(['name' => 'Indaiatuba']);
        City::create(['name' => 'Jundiaí']);
        City::create(['name' => 'Limeira']);
        City::create(['name' => 'Matão']);
        City::create(['name' => 'Novo Horizonte']);
        City::create(['name' => 'Piracicaba']);
        City::create(['name' => 'Quintana']);
        City::create(['name' => 'Santo André']);
        City::create(['name' => 'Tabatinga']);
        City::create(['name' => 'Ubatuba']);
        City::create(['name' => 'Vargem Grande do Sul']);
        City::create(['name' => 'Zacarias']);
    }
}
