<section id="projetos">
    <div class="container">
        <h2 class="title-section"> <span>Projetos</span> </h2>
        <div class="row">
            @forelse($projetos as $projeto)
                <div class="col-sm-4">
                    <a href="{{ route('site.projects.show', [$projeto->slug]) }}" class="project-item">
                        <div class="cover">
                            <img src="{{ $projeto->cover() }}" alt="">
                        </div>
                        <h3> {{ $projeto->titulo }} </h3>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
        <div class="row">
            <a href="{{ route('site.projects.index') }}" class="btn show-more">Ver todos os projetos</a>
        </div>
    </div>
</section>