<x-layout title="Welcome">
    <div class="space-y-6">
        <header class="hero bg-base-100 rounded-box p-10 text-center">
            <div class="hero-content flex-col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-16 text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 4.5V21.752c0 1.54.702 2.93 1.812 3.75.422.31.884.555 1.369.747.213.086.43.148.648.189l.013.005.013-.005c.217-.041.434-.103.647-.189.485-.193.947-.437 1.368-.747 1.109-.82 1.811-2.21 1.811-3.752V4.5m0 0H6m12 0H6m0 0V4.5c0-.584.247-1.125.65-1.503.41-.38.935-.64 1.5-.77.55-.13 1.11-.13 1.65 0 .563.129 1.09.39 1.5.771.4.379.65.919.65 1.503V4.5Z" />
                </svg>
                <h1 class="text-5xl font-bold text-base-content">Welcome to Chirper</h1>
                <p class="py-4 text-base-content/70 max-w-xl">
                    A Twitter-like microblogging app built from scratch with Laravel.
                    This is your new homepage.
                </p>
                <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
            </div>
        </header>

        <div class="divider">Latest Chirps</div>

        <div class="card bg-base-100 shadow-sm">
            <div class="card-body text-center py-12">
                <p class="text-base-content/70">No chirps yet. Be the first to chirp!</p>
            </div>
        </div>
    </div>
</x-layout>