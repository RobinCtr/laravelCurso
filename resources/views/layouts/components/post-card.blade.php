<a href="{{ route('posts.show', [$post->id]) }}" class="list-group-item list-group-item-action flex-column align-items-start mb-3">
    <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $post->title }}</h5>
        <small class="text-body-secondary">{{ $post->created_at }}</small>
    </div>
    <p class="mb-1">{{ $post->content }}</p>
    <div class="d-flex align-items-center">
        <img src="https://imgs.search.brave.com/SIJiFZbava8H-eAGEe5DcbvC5McoqjH1E6DFRYVPYOw/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA5LzcwLzk4LzAz/LzM2MF9GXzk3MDk4/MDMxNV81VlltRDRj/MEJycVg3N3ZlS2lG/c2MySjZrc01ONXpz/aC5qcGc" alt="User Avatar" class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover;">
        <small class="text-body-secondary"><strong>Autor:</strong> {{ $post->author }}</small>
    </div>
</a>