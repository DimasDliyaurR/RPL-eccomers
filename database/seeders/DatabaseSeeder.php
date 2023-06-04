<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username'  => 'jamil12',
            'first_name' => 'Jamil',
            'last_name' => 'kan',
            'level' => 'admin',
            'email' => 'jamil12@gmail.com',
            'password' => Hash::make('jamil12')
        ]);

        User::create([
            'username'  => 'dimas12',
            'first_name' => 'dimas',
            'last_name' => 'dliyaur',
            'level' => 'user',
            'email' => 'dimas12@gmail.com',
            'password' => Hash::make('dimasdliyaur')
        ]);
    }
}
