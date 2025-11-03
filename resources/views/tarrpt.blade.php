<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if ($time == "D") Desenvolvedor @else Suporte @endif
    </title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-blue-900 bg-cover bg-center" style="background-image: url('{{ asset('images/4879.jpg') }}')" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <nav class="shadow-lg w-full bg-blue-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/target_logo.png') }}" alt="Logo" class="h-16 w-auto drop-shadow-md">
                        <span class="font-semibold text-lg tracking-wide"></span>
                    </div>
                    <div style="gap: 9px; display: flex;">
                    @if ($time == 'D')
                        <button 
                            data-bs-toggle="modal" 
                            data-bs-target="#modalDev"
                            style="background-color: #89CFF0; border-radius: 15px; color: white; padding: 10px 15px; :hover {text-decoration: underline; cursor: pointer; font-size: 16px;"> 
                            Enviar Arquivos RPTs
                        </button>
                    @endif
                    <!-- <button
                        style="background-color: transparent; border: none; color: black; padding: 10px 15px; cursor: pointer; font-size: 16px;"> 
                        Registrar Organização
                    </button>
                    <button
                        style="background-color: transparent; border: none; color: black; padding: 10px 15px; cursor: pointer; font-size: 16px;"> 
                        Registrar Cliente
                    </button> -->
                </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="bg-red-700 hover:bg-red-600 text-white font-semibold py-1 px-2 rounded-md transition" data-bs-toggle="modal" data-bs-target="#meuModal ">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="p-6">

       <div style=" width: 65%; " class="mx-auto bg-white/10 p-4 rounded-xl shadow-lg backdrop-blur-sm border border-white/20"> 
        <h1  class="font-semibold text-white mb-1" > Painel de Consulta RPT </h1>

            <form method="GET" action="{{ route('tarrpt.index') }}">
                @csrf

                <div class="flex flex-col min-w-[150px] mb-4">
                    <label class="font-semibold text-white mb-1">Versão:</label>
                    <input type="text" name="versao" placeholder="Digite a Versão" 
                           class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ request('versao') }}">
                </div>
                 
                <div class="flex flex-col min-w-[150px] mb-4">
                    <label class="font-semibold text-white mb-1">Cliente:</label>
                    <input type="text" name="cliente" placeholder="Digite o Cliente" 
                           class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ request('cliente') }}">
                </div>

                <div class="flex flex-col min-w-[150px] mb-4">
                    <label class="font-semibold text-white mb-1">Tela:</label>
                    <input type="text" name="tela" placeholder="Digite a Tela" 
                           class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                           value="{{ request('tela') }}">
                </div>

                <div class="flex flex-col">
                            <label class="font-semibold mb-1">Segmento:</label>
                            <select name="segmento" class="form-select rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Selecione um segmento</option>
                                {{-- @foreach($segmentos as $key => $value)
                                    <option value="{{ resquest('segmento')}"></option> 
                                @endforeach --}}
                                <option value="1">1 - Atacado</option> 
                                <option value="2">2 - Automotivo Revenda</option> 
                                <option value="3">3 - Automotivo Assistência</option> 
                                <option value="4">4 - Casa e Decoração</option> 
                                <option value="5">5 - Coveniencia</option> 
                                <option value="6">6 - EPI e SIGN</option> 
                                <option value="7">7 - Indústria</option> 
                                <option value="8">8 - Joelheria</option> 
                                <option value="9">9 - Lanchonetes, Pizzaria e Afins</option> 
                                <option value="10">10 - Material de Construção</option> 
                                <option value="11">11 - Mercado de Proximidade</option> 
                                <option value="12">12 - Moda</option> 
                                <option value="13">13 - Móveis e Eletro</option> 
                                <option value="14">14 - Ótica</option> 
                                <option value="15">15 - Perfumaria e Cosméticos</option> 
                                <option value="16">16 - Presentes, Papelaria e Outros</option> 
                                <option value="17">17 - Suplementos e Produtos Naturais</option> 
                                <option value="18">18 - Loja de Instrumentos Musicais e Acessórios</option> 
                                <option value="19">19 - Distribuidora de Bebidas</option> 
                                <option value="20">20 - Salões de Beleza e Barbearias</option> 
                                <option value="21">21 - Feiras e Exposições</option> 
                                <option value="22">22 - Franquedoras</option> 
                                <option value="23">23 - Retíficas e Manutenção Agrícola</option> 
                                <option value="24">24 - Contratos</option> 
                                <option value="25">25 - Parafusos</option> 
                                <option value="26">26 - E-Commerce</option> 
                                <option value="27">27 - Locação</option>
                                <option value="28">28 - Loja de Celulares</option>
                            </select>
                        </div>
                <div styles="display: flex; justify-content: center;" class="flex flex-col justify-end items-end h-16">
                    <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-lg transition duration-150 h-10">
                        Buscar
                    </button>
                </div>
            </form>
            <x-cards-rpt :rpt="$rpt" />
        </div>
    </main>
    @include('modal.modal_dev')
</body>
</html>
