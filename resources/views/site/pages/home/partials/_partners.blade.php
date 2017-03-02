<section id="clientes">
    <div class="container">
        <h2 class="title-section"> <span>Clientes e Municipios</span></h2>

        <div class="row">
            @forelse($clientes->elementos as $cliente)
                <div class="col-sm-3">
                    <div class="cliente-item">
                        <img src="{{ $cliente->cover() }}" alt="">
                        <h3> {{ $cliente->titulo }} </h3>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>