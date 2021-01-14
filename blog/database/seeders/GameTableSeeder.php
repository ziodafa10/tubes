<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Game::create([
            'nama' => Str::random(20),
            'email' => Str::random(20),
            'jenis' => Str::random(20),
        ]);    
    }
}
