<div class="banner-home owl-carousel owl-theme owl-loaded ">
    @forelse($carousel as $item)
        <div class="banner-item">
            <img src="{{ $item->banner() }}" alt="">
        </div>
        @empty
    @endforelse
</div>
