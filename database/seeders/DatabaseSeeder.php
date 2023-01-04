<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Entregador::factory(10)
            ->hasVeiculos(3)
            ->create();

         \App\Models\User::factory()->create([
             'name' => 'Lucas Gobel',
             'email' => 'lucasgobel@gmail.com',
             'password' => Hash::make('12345678'),
             'is_admin' => true,
         ]);
    }
}
