<x-layout title="Welcome">
    <div class="space-y-6">
        <header>
            <h1 class="text-3xl font-bold text-base-content">Latest Chirps</h1>
            <p class="text-base-content/70">What's happening?</p>
        </header>

        <div class="divider">Chirps</div>

        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body">
                    <div class="flex items-start gap-3">
                        <div class="avatar placeholder">
                            <div class="bg-neutral text-neutral-content w-10 rounded-full">
                                <span>{{ $chirp['author'][0] }}</span>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2">
                                <span class="font-medium text-base-content">{{ $chirp['author'] }}</span>
                                <span class="text-base-content/50 text-sm">{{ $chirp['time'] }}</span>
                            </div>
                            <p class="text-base-content/80 mt-1">{{ $chirp['message'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>