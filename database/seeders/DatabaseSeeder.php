<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Uid\UuidV3;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => UuidV3::v4(),
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'address' => 'mdy',
            'phone' => '092131231',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
        
    }
}
