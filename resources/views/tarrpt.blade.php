<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TarRPT</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-blue-900 bg-cover bg-center" style="background-image: url('{{ asset('images/4879.jpg') }}')" >
    <header>
        <x-navbar />
    </header>

    <main class="p-6">
        <div class="max-w-7xl mx-auto bg-white/10 p-6 rounded-xl shadow-2xl backdrop-blur-sm border border-white/20">

            <form method="GET" action="{{ route('tarrpt.index') }}">
                @csrf
                <div class="flex flex-col flex-grow min-w-[150px]">
                    <label class="font-semibold text-white mb-1">Versão:</label>
                    <input type="text" name="versao" placeholder="Digite a Versão" class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ request('versao') }}">
                </div>
                <div class="flex flex-col flex-grow min-w-[150px]">
                    <label class="font-semibold text-white mb-1">Cliente:</label>
                    <input type="text" name="cliente" placeholder="Digite o Cliente" class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ request('cliente') }}">
                </div>
                <div class="flex flex-col flex-grow min-w-[150px]">
                    <label class="font-semibold text-white mb-1">Tela:</label>
                    <input type="text" name="tela" placeholder="Digite a Tela" class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ request('tela') }}">
                </div>
                <div class="flex flex-col flex-grow min-w-[150px]">
                    <label class="font-semibold text-white mb-1">Segmento:</label>
                    <input type="number" name="segmento" placeholder="Digite o Segmento" min="1" max="27" class="rounded-lg p-2 text-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500" value="{{ request('segmento') }}">
                </div>
                
                <div class="flex flex-col justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-150 h-10">
                        Buscar
                    </button>
                </div>
            </form>
            
            <h1 class="text-2xl font-bold text-white mb-4 border-b pb-2 border-white/30">Lista de Relatórios</h1>

            @if($rpt->isEmpty())
                <p class="text-white bg-red-500/50 p-4 rounded-lg">Nenhum registro encontrado.</p>
            @else
                <div class="overflow-x-auto shadow-lg rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 bg-white bg-opacity-90">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Campo 1</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Campo 2</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Criado em</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($rpt as $item)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $item->campo1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $item->campo2 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $rpt->links() }} 
                </div>
                @endif
        </div>
    </main>
</body>
</html>