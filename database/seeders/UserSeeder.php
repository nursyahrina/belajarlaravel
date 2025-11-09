<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name"=> "Nursyahrina",
            "username" => "nursyahrina",
            "email"=> "nursyahrina17@gmail.com",
            "password"=> Hash::make('nursy81'),
        ]);

        User::factory(4)->create();
    }
}
