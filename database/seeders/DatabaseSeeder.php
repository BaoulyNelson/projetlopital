<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Appeler le seeder des utilisateurs
        $this->call(UserSeeder::class);
    }
}
