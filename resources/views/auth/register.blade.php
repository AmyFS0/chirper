<x-layout title="Register">
    <div class="max-w-xl mx-auto">
        <header class="text-center mb-8">
            <h1 class="text-xl font-bold text-base-content">Create your account</h1>
            <p class="text-base-content/70 mt-2">Join Chirper and start chirping!</p>
        </header>

        <form method="POST" action="{{ route('register') }}" class="card bg-base-100 shadow-sm">
            @csrf
            <div class="card-body space-y-4">
                <div class="form-control">
                    <label for="name" class="label">
                        <span class="label-text">Name</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="input input-bordered w-full @error('name') input-error @enderror"
                        value="{{ old('name') }}"
                        required
                        autofocus
                    />
                    @error('name')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

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
                    <label for="password_confirmation" class="label">
                        <span class="label-text">Confirm Password</span>
                    </label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="input input-bordered w-full"
                        required
                    />
                </div>

                <button type="submit" class="btn btn-primary w-full mt-4">Register</button>
            </div>
        </form>

        <p class="text-center mt-6 text-base-content/70">
            Already have an account? <a href="{{ route('login') }}" class="link link-primary">Sign in</a>
        </p>
    </div>
</x-layout>