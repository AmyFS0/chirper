<x-layout title="Edit Chirp">
    <div class="max-w-xl mx-auto">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-base-content">Edit Chirp</h1>
            <p class="text-base-content/70">Make changes to your chirp</p>
        </header>

        <form method="POST" action="{{ route('chirps.update', $chirp) }}" class="card bg-base-100 shadow-sm">
            @csrf
            @method('PUT')
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
                        maxlength="255"
                        required
                    >{{ old('message', $chirp->message) }}</textarea>
                    @error('message')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="flex gap-2 mt-6">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ route('home') }}" class="btn btn-ghost">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</x-layout>