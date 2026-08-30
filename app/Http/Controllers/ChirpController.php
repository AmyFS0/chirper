<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    public function index(): View
    {
        $chirps = [
            [
                'id' => 1,
                'author' => 'Taylor Otwell',
                'message' => 'The only way to do great work is to love what you do.',
                'time' => '2 hours ago',
            ],
            [
                'id' => 2,
                'author' => 'Jeffrey Way',
                'message' => 'Clean code is better than clever code.',
                'time' => '5 hours ago',
            ],
            [
                'id' => 3,
                'author' => 'Josh Cirre',
                'message' => 'Learning Laravel has been a game changer for me!',
                'time' => '1 day ago',
            ],
        ];

        return view('home', [
            'chirps' => $chirps,
        ]);
    }
}