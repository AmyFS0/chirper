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
        $chirps = Chirp::with('user')->latest()->take(50)->get();

        return view('home', [
            'chirps' => $chirps,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        Chirp::create($validated);

        return redirect(route('home'))->with('success', 'Chirp created!');
    }

    public function edit(Chirp $chirp): View
    {
        return view('chirps.edit', [
            'chirp' => $chirp,
        ]);
    }

    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect(route('home'))->with('success', 'Chirp updated!');
    }

    public function destroy(Chirp $chirp): RedirectResponse
    {
        $chirp->delete();

        return redirect(route('home'))->with('success', 'Chirp deleted!');
    }
}