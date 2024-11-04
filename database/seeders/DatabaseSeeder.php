<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         $this->call(HelloSeeder::class);

        User::factory()->create([
            'username' => 'testUsr001',
            'email' => 'usr001@gmail.com',
            'password' => bcrypt("password"),
        ]);
        User::factory()->create([
            'username' => 'testUsr002',
            'email' => 'usr002@gmail.com',
            'password' => bcrypt("password"),
        ]);
        User::factory()->create([
            'username' => 'testUsr003',
            'email' => 'usr003@gmail.com',
            'password' => bcrypt("password"),
        ]);
    }
}
