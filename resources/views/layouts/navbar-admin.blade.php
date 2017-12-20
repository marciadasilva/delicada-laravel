<div class="navbar-fixed">
    <nav id="nav" class="transparent z-depth-0 navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/">
                    <img class="img-responsive" src="{{ asset('img/site/logo.png') }}" alt="DM">
                </a>
                <a href="" data-activates="menu-mobile" class="button-collapse">
                    <i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="/admin/categories">Categorias</a></li>
                    <li><a href="/admin/products">Produtos</a></li>
                    <li><a href="/admin/company">Empresa</a></li>
                    <li><a href="/admin/help">Ajuda</a></li>
                    @if(Auth::check())
                        {{--<li><a href="/admin">{{Auth::user()->name}}</a></li>--}}
                        <li><a href="/logout">Sair</a></li>
                    @else
                        <li><a href="/login">Entrar</a></li>
                    @endif
                </ul>
                <ul class="side-nav" id="menu-mobile">
                    <li><a href="/">Home</a></li>
                    <li><a href="/admin/categories">Categorias</a></li>
                    <li><a href="/admin/products">Produtos</a></li>
                    <li><a href="/admin/company">Empresa</a></li>
                    <li><a href="/admin/help">Ajuda</a></li>
                    @if(Auth::check())
                        {{--<li><a href="/admin">{{Auth::user()->name}}</a></li>--}}
                        <li><a href="/logout">Sair</a></li>
                    @else
                        <li><a href="/login">Entrar</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>