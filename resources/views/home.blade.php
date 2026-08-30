<x-layout title="Welcome">
    <div class="space-y-6">
        <header>
            <h1 class="text-3xl font-bold text-base-content">Latest Chirps</h1>
            <p class="text-base-content/70">What's happening?</p>
        </header>

        <form method="POST" action="{{ route('chirps.store') }}" class="card bg-base-100 shadow-sm">
            @csrf
            <div class="card-body">
                <div class="form-control">
                    <label for="message" class="label">
                        <span class="label-text">Your Chirp</span>
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        class="textarea textarea-bordered w-full @error('message') textarea-error @enderror"
                        rows="3"
                        placeholder="What's on your mind?"
                        maxlength="255"
                        required
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>
                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Chirp!</button>
                </div>
            </div>
        </form>

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