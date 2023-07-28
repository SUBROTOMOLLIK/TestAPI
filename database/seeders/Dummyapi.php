<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dummyapi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DummyApi::factory(10)->create();

        \App\Models\DummyApi::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'address' => 'nawabganj,dhaka',
        ]);
    }
}
