<?php

namespace Database\Seeders;

use App\Console\Commands\Teste;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            CitySeeder::class,
            CategorySeeder::class
        ]);
    }
}
