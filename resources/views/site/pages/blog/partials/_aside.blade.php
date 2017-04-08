<aside class="blog-widgets">
        <div class="blog-widget">
            <h3>Categorias</h3>
            @forelse($categorias as $categoria)
                <a href="{{ $categoria->link() }}"> {{ $categoria->titulo }} </a>
            @empty
            @endforelse
        </div>
</aside>