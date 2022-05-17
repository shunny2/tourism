<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexander Davis',
            'email' => 'alexander@gmail.com',
            'password' => Hash::make('12345678'),
        ])->givePermissionTo('admin');

        User::create([
            'name' => 'Cleiton Rasta',
            'email' => 'cleiton@gmail.com',
            'password' => Hash::make('12345678'),
        ])->givePermissionTo('representative');

        User::create([
            'name' => 'Bruna Delicia',
            'email' => 'bruna@gmail.com',
            'password' => Hash::make('12345678'),
        ])->givePermissionTo('tourist');
    }
}
