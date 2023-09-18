<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            "name" => "Gervasio",
            "email" => "gervasiodelcap123@hotmail.com"
        ]);

        \App\Models\User::factory(1)->create([
            "name" => "Lavalleja",
            "email" => "33orientales@gmail.com"
        ]);

        \App\Models\Bebida::factory(200)->create();
    }
}
