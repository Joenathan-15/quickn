<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HelloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // put hello.json in database table named 'hellos'
        $json = file_get_contents(database_path('seeders/hello.json'));
        $data = json_decode($json, true);

        foreach ($data as $row) {
            DB::table('hellos')->insert([
                'language' => $row['language'],
                'text' => $row['hello'],
            ]);
        }
    }
}
