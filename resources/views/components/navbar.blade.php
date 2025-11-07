<header>
    <nav class="custom-nav">
        <div class="nav-container">
            <div class="nav-content">
                <a class="logo-container" href="{{ url('/') }}">
                    <img src="{{ asset('images/target_logo.png') }}" alt="Logo" class="logo">
                </a>

                <div class="nav-buttons">
                    @if ($time == 'D')
                        <button data-bs-toggle="modal" data-bs-target="#modalDev" class="btn-rpt">
                            Enviar Arquivos RPTs
                        </button>

                        <button data-bs-toggle="modal" data-bs-target="#modalOrganizacao" class="btn-rpt">
                            Criar ou Editar Organização
                        </button>

                        <button data-bs-toggle="modal" data-bs-target="#modalClientes" class="btn-rpt">
                            Criar ou Editar Cliente
                        </button>
                    @endif
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn-logout">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
</header>