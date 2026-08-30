<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . ' - Chirper' : 'Chirper' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="font-sans bg-base-200 min-h-screen flex flex-col" data-theme="lofi">
    <nav class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <a class="btn btn-ghost text-xl" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 4.5Y21.752c0 1.54.702 2.93 1.812 3.75.422.31.884.555 1.369.747.213.086.43.148.648.189l.013.005.013-.005c.217-.041.434-.103.647-.189.485-.193.947-.437 1.368-.747 1.109-.82 1.811-2.21 1.811-3.752V4.5m0 0H6m12 0H6m0 0V4.5c0-.584.247-1.125.65-1.503.41-.38.935-.64 1.5-.77.55-.13 1.11-.13 1.65 0 .563.129 1.09.39 1.5.771.4.379.65.919.65 1.503V4.5Z" />
                </svg>
                Chirper
            </a>
        </div>

        <div class="navbar-end gap-2">
            <a href="{{ route('login') }}" class="btn btn-ghost">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 w-full max-w-3xl mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer bg-base-100 text-base-content/70 py-4">
        <div class="w-full max-w-3xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-sm">Built with Laravel - <a href="https://laravel.com" target="_blank" class="link link-hover">laravel.com</a></p>
            <p class="text-sm">Chirper &copy; {{ date('Y') }}</p>
        </div>
    </footer>
</body>
</html>