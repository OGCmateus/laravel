<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personagens</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        @foreach ($personagem as $heroi)
            <div class="bg-white rounded-lg shadow-md p-6 mb-6 transition-transform transform hover:scale-105">
                <h1 class="text-2xl font-bold text-indigo-600 mb-2">
                    Nome do personagem: <span class="text-gray-800">{{ $heroi['nome'] }}</span>
                </h1>
                <h1 class="text-xl font-semibold text-indigo-500">
                    Poder do personagem: <span class="text-gray-700">{{ $heroi['poder'] }}</span>
                </h1>
            </div>
        @endforeach

        {{ $personagem->links}}
    </div>

</body>
</html>
