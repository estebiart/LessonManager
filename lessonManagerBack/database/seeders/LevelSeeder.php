<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create(['name' => '1']);
        Level::create(['name' => '2']);
        Level::create(['name' => '3']);
        Level::create(['name' => '4']);
        Level::create(['name' => '5']);
        Level::create(['name' => '6']);
    }
}
