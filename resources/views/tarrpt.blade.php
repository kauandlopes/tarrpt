<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TarRPT') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS e JS compilados pelo Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blue-100 font-sans text-gray-900 antialiased">

    <header>
        <x-navbar />
    </header>

    <main>
        <form>
            <div style="display: flex; gap: 20px;">
                <!-- Cliente -->
                <div style="display: flex; flex-direction: column;">
                    <label>Cliente:</label>
                    <textarea rows="2" cols="15"></textarea>
                </div>

                <!-- Versão -->
                <div style="display: flex; flex-direction: column;">
                    <label>Versão:</label>
                    <textarea rows="1" cols="10"></textarea>
                </div>

                <!-- Data -->
                <div style="display: flex; flex-direction: column;">
                    <label>Data:</label>
                    <textarea rows="1" cols="10"></textarea>
                </div>

                <!-- Endereço -->
                <div style="display: flex; flex-direction: column;">
                    <label>Endereço:</label>
                    <textarea rows="2" cols="15"></textarea>
                </div>

                <!-- Tela -->
                <div style="display: flex; flex-direction: column;">
                    <label>Tela:</label>
                    <textarea rows="1" cols="10"></textarea>
                </div>

                <!-- Segmento -->
                <div style="display: flex; flex-direction: column;">
                    <label>Segmento:</label>
                    <textarea rows="1" cols="10"></textarea>
                </div>
            </div>
        </form>

    </main>

</body>
</html>
