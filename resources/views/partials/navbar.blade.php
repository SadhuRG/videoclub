<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777">
            <img src="{{ asset('imagenes/home-icon.png') }}" alt="Home Icon" style="width: 28px; height: 28px; margin-right: 5px;">
            HOME
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item {{ Request::is('servicios') && ! Request::is('servicios/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/servicios')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            SERVICIOS
                        </a>
                    </li>

                    <li class="nav-item {{  Request::is('proyectos') && ! Request::is('proyectos/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/proyectos')}}">
                            PROYECTOS
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('clientes') && ! Request::is('clientes/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('clientes')}}">
                            CLIENTES
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('blog') && ! Request::is('blog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('blog')}}">
                            BLOG
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('contacto') && ! Request::is('contacto/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('contacto')}}">
                            CONTACTO
                        </a>
                    </li>

                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                CERRAR SESION
                            </button>
                        </form>
                    </li>
                </ul>


            </div>
        @endif
    </div>
</nav>