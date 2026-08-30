@props(['chirp'])

<div class="card bg-base-100 shadow-sm">
    <div class="card-body">
        <div class="flex items-start gap-3">
            <div class="avatar">
                <div class="w-10 rounded-full">
                    @if ($chirp->user)
                        <img src="https://api.dicebear.com/7.x/initials/svg?seed={{ $chirp->user->email }}" alt="{{ $chirp->user->name }}" />
                    @else
                        <img src="https://api.dicebear.com/7.x/initials/svg?seed=anonymous" alt="Anonymous" />
                    @endif
                </div>
            </div>

            <div class="flex-1 min-w-0">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-base-content">
                        {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}
                    </span>
                    <span class="text-base-content/50 text-sm">
                        {{ $chirp->created_at->diffForHumans() }}
                    </span>
                    @if ($chirp->updated_at->gt($chirp->created_at->addSeconds(5)))
                        <span class="badge badge-ghost badge-xs">edited</span>
                    @endif
                </div>

                <p class="text-base-content/80 mt-1 whitespace-pre-wrap">{{ $chirp->message }}</p>

                <div class="flex items-center gap-2 mt-3">
                    <a href="{{ route('chirps.edit', $chirp) }}" class="btn btn-ghost btn-sm">Edit</a>

                    <form method="POST" action="{{ route('chirps.destroy', $chirp) }}" onsubmit="return confirm('Are you sure you want to delete this chirp?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-ghost btn-sm text-error">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>