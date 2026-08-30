<?php

namespace Database\Seeders;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Database\Seeder;

class ChirpSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::factory()->count(3)->create();

        $chirps = [
            'Just setting up my Chirper!',
            'Laravel is amazing!',
            'Building my first Laravel app today.',
            'The MVC pattern makes so much sense now.',
            'Eloquent ORM is a game changer.',
            'Blade components are so powerful.',
            'Loving the developer experience with Laravel.',
            'Just deployed my first Laravel app!',
            'Tailwind CSS + Laravel = wonderful combo.',
            'Learning something new every day with Laravel.',
        ];

        foreach ($users as $user) {
            $randomChirps = collect($chirps)->shuffle()->take(rand(2, 4));

            foreach ($randomChirps as $chirp) {
                Chirp::create([
                    'user_id' => $user->id,
                    'message' => $chirp,
                ]);
            }
        }
    }
}