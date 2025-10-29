<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TARRPT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS e JS compilados pelo Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-200 ">
    <header>
        <x-navbar />
    </header>

    <main style="display: flex; flex-direction: center; justify-content: center;" >

         <form action="{{ route('tarrpt.store') }}" method="POST">
            @csrf
            <!-- Versão -->
            <div style="display: flex; flex-direction: column;">
                <label>Versão:</label>
                <input type="text" name="versao" placeholder="Versão" required>
            </div>

             <!-- Segmento -->
            <div style="display: flex; flex-direction: column;">
                <label>Segmento:</label>
                <input type="text" name="segmento" placeholder="Segmento" required>
            </div>

             <!-- Tela -->
            <div style="display: flex; flex-direction: column;">
                <label>Tela:</label>
                <input type="text" name="tela" placeholder="Tela" required>
            </div>

             <!-- Data -->
            <div style="display: flex; flex-direction: column;">
                <label>Data:</label>
                <input type="text" name="data" placeholder="Data">
            </div>

             <!-- Hora -->
            <div style="display: flex; flex-direction: column;">
                <label>Hora:</label>
                <input type="text" name="hora" placeholder="Hora">
            </div>

             <!-- Cliente 
            <div style="display: flex; flex-direction: column;">
                <label>Cliente:</label>
                <input type="text" name="cliente" placeholder="Cliente">
            </div>-->

             <!-- Endereço URL -->
            <div style="display: flex; flex-direction: column;">
                <label>Endereço URL:</label>
                <input type="text" name="endereco" placeholder="Endereço URL">
            </div>

             <button>Salvar</button>
        </form>
    </main>
</body>
</html>
