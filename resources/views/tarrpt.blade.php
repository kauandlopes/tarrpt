<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'TarRPT') }}</title>
</head>
<body>
    <h1>TarRPT</h1>
    <h2>Cliente:</h2>
    <textarea></textarea>
    <h2>Versão:</h2>
    <textarea></textarea>
    <h2>Data:</h2>
    <textarea></textarea>
    <h2>Endereço:</h2>
    <textarea></textarea>
    <h2>Tela:</h2>
    <textarea></textarea>
    <h2>Segmento:</h2>
    <textarea></textarea>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="">Logout</button>
    </form>
</body>
</html>