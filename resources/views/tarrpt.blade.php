<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TarRPT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- CSS e JS compilados pelo Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-blue-200 bg-cover bg-center " style="background-image: url('{{ asset('images/4879.jpg') }}') bg-blue-900;" >
    <!--class="w-full sm:max-w-md px-6 py-4 bg-blue-900/20 border border-blue-300 rounded-lg shadow-lg backdrop-blur-sm-->
    <header>
        <x-navbar />
    </header>

    <main>
        <form >
            <div style="display: flex; gap: 10px; margin-top: 20px;">

                <!-- Versão -->   
                <div style="display: flex; flex-direction: column; margin-left: 3%; ">
                    <label>Versão:</label>
                    <input type="text" name="versao" placeholder="Digite a Versão" style="border-radius: 15px; width: 100%; height:50%" rows="1" min="0" cols="10"></input>
                </div>
                <!-- Cliente -->
                <div style="display: flex; flex-direction: column; ">
                    <label>Cliente:</label>
                    <input type="text" name="cliente" placeholder="Digite a Cliente" style="border-radius: 15px; width: 100%; height:50%" rows="2" cols="15" ></input>
                </div>

                <!-- Tela -->
                <div style="display: flex; flex-direction: column;">
                    <label>Tela:</label>
                    <input type="text" name="tela" placeholder="Digite a Tela" style="border-radius: 25px; width: 100%; height:50%" rows="1" cols="10"></input>
                </div>

                <!-- Segmento -->
                <div style="display: flex; flex-direction: column;">
                    <label>Segmento:</label>
                    <input type="text" name="segmento" placeholder="Digite o Segmento" style="border-radius: 25px; width: 255%; height:50%" type="number" min="1" max="27" ></input>
                </div>






            </div>

            <div style="display: flex; justify-content: center; margin-right: 8.5%; gap: 10px;">
            </div>

        </form>
    </main>
</body>
</html>
