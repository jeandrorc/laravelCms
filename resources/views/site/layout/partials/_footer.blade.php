<footer>
<div class="row">
    <div class="footer-info">
        <div class="container">
            <div class="col-sm-4">
                <h3 class="item-title">Noticias</h3>
                <div class="item-body">
                    @forelse($posts->take(3) as $noticia)
                        <div class="footer-item-notice">
                            <a href="{{ $noticia->link() }}">
                                <span class="date-notic">{{ $noticia->data_publicacao }}</span>
                                <div class="item-notice-title">{{ $noticia->titulo }}</div>
                            </a>
                        </div>    
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="item-title">Entre em contato</h3>
                <div class="item-body">
                    @forelse($contatos as $contato)
                        <div class="item-contato">
                            {{ $contato->valor }}
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="col-sm-4">
                <h3 class="item-title">Quem somos</h3>
                <div class="item-body">
                    <p>{{ $empresa->descricao_curta }}</p>
                    <img src="{{ $empresa->logo() }}" alt="{{ $empresa->nome_fantasia }}">
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="menu">
                            @include('site.layout.partials._menu')
                        </div>
                        <div class="copyrights">
                            Henrique Imóvel Legal - 2017 - Todos direitos reservados
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="powered-by">
                            <span>criado por:</span>
                            <img src="{{ asset('images/foccus.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>