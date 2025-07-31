<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithouModelEvents;
use Illuminate\Database\seeder;

class MobilSeeder extends seeder
{
    public function run(): void
    {
        Mobil::factory()->create([
            'namemobil' => 'Toyota',
        ]);
    }
}