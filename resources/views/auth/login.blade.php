<x-layout title="Login">
    <div class="max-w-xl mx-auto">
        <header class="text-center mb-8">
            <h1 class="text-xl font-bold text-base-content">Welcome back</h1>
            <p class="text-base-content/70 mt-2">Sign in to your Chirper account</p>
        </header>

        <form method="POST" action="{{ route('login') }}" class="card bg-base-100 shadow-sm">
            @csrf
            <div class="card-body space-y-4">
                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="input input-bordered w-full @error('email') input-error @enderror"
                        value="{{ old('email') }}"
                        required
                    />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="password" class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="input input-bordered w-full @error('password') input-error @enderror"
                        required
                    />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer justify-start gap-2">
                        <input type="checkbox" name="remember" class="checkbox checkbox-primary" />
                        <span class="label-text">Remember me</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-full mt-4">Sign In</button>
            </div>
        </form>

        <p class="text-center mt-6 text-base-content/70">
            Don't have an account? <a href="{{ route('register') }}" class="link link-primary">Sign up</a>
        </p>
    </div>
</x-layout>