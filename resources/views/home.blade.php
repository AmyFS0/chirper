<x-layout title="Welcome">
    <div class="space-y-6">
        <header>
            <h1 class="text-3xl font-bold text-base-content">Latest Chirps</h1>
            <p class="text-base-content/70">What's happening?</p>
        </header>

        <div class="divider">Chirps</div>

        @forelse ($chirps as $chirp)
            <x-chirp :chirp="$chirp" />
        @empty
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body text-center py-12">
                    <p class="text-base-content/70">No chirps yet. Be the first to chirp!</p>
                </div>
            </div>
        @endforelse
    </div>
</x-layout>