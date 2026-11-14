@props([
    'icon' => '📘',
    'title',
    'description'
])

<div class="col-md-6">
    <article class="card h-100 border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="fs-2 mb-3" aria-hidden="true">{{ $icon }}</div>
            <h3 class="h5 card-title fw-bold">{{ $title }}</h3>
            <p class="card-text text-secondary mb-0">{{ $description }}</p>
        </div>
    </article>
</div>
