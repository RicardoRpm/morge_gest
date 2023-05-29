<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Primeiro_login extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Olivio Nation',
            'email' => 'olivioadao12@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
