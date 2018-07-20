<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use App\Models\Ponente;
use App\Models\Ponencia;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret')
        ]);

        Ponente::create([
            "nombre" => "Andres Garcia",
            "pais" => "Colombia",
            "foto" => "https://avatars0.githubusercontent.com/u/11448559?s=400&v=4",
        ]);

        Ponente::create([
            "nombre" => "Lenon Ishimokawa",
            "pais" => "Peru",
            "foto" => "https://pbs.twimg.com/profile_images/3146414977/8f0470628bbb73087c016e3411271d9a_400x400.jpeg",
        ]);

        Ponencia::create([
            "nombre" => "Introducción a Erlang",
            "ponente_id" => 1,
        ]);

        Ponencia::create([
            "nombre" => "Cultura Empresarial",
            "ponente_id" => 2,
        ]);

    }
}
