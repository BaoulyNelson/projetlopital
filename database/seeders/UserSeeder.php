<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Créer un utilisateur administrateur
        User::create([
            'name' => 'BaoulyNelson',
            'email' => 'elconquistadorbaoulyn@gmail.com',
            'password' => Hash::make('22185244Bn@'),
            'role' => 'admin',
        ]);

     
    }
}
