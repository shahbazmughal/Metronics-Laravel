<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'name'              => $faker->name,
            'email'             => 'admin@mumara.com',
            'password'          => Hash::make('123456'),
            'photo'             => 'sam.jpg',
            'email_verified_at' => now(),
        ]);

        $demoUser2 = User::create([
            'name'              => $faker->name,
            'email'             => 'wasif@hostingshouse.com',
            'password'          => Hash::make('123456'),
            'photo'             => 'wasif.jpg',
            'email_verified_at' => now(),
        ]);
    }
}
