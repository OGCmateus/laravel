<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Personagem</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <form action="{{ route('view.add.personagem') }}" method="POST" class="max-w-md w-full p-6 bg-white rounded-2xl shadow-lg space-y-4">
        @csrf
        <h2 class="text-2xl font-bold text-center text-gray-800">Cadastrar Personagem</h2>

        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome"
                   class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div>
            <label for="poder" class="block text-sm font-medium text-gray-700">Poder</label>
            <input type="text" id="poder" name="poder" placeholder="Poder"
                   class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-xl transition-all duration-300">
            Cadastrar
        </button>
    </form>

</body>
</html>
