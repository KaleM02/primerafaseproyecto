<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\libro;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        libro::factory(500)->create();
    }
}
