<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Cortina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .neon-button {
            transition: all 0.3s ease;
            box-shadow: 0 0 5px #ff00ff, 0 0 10px #ff00ff, 0 0 15px #ff00ff, 0 0 20px #ff00ff;
        }
        .neon-button:hover {
            box-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff, 0 0 30px #ff00ff, 0 0 40px #ff00ff;
        }
    </style>
</head>
<body class="bg-violet-100 font-sans antialiased flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-4 sm:p-8">
        <div class="bg-violet-50 rounded-lg shadow-xl p-6 sm:p-8 max-w-lg mx-auto">
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Detalles de la Cortina</h1>
            <p class="text-violet-700 text-center mb-8">Información completa sobre la cortina.</p>
            
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="mb-4">
                    <p class="text-violet-800 font-semibold">ID:</p>
                    <p class="text-violet-900">{{ $cortina->id }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-violet-800 font-semibold">Tipo:</p>
                    <p class="text-violet-900">{{ $cortina->tipo }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-violet-800 font-semibold">Color:</p>
                    <p class="text-violet-900">{{ $cortina->color }}</p>
                </div>
                <div class="mb-4">
                    <p class="text-violet-800 font-semibold">Aula:</p>
                    <p class="text-violet-900">{{ $cortina->aula->nombre }}</p>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <a href="{{ route('cortinas.edit', $cortina->id) }}" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300 mr-4">
                    Editar Cortina
                </a>
                <a href="{{ route('cortinas.index') }}" class="bg-gray-400 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-gray-500 transition duration-300">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>
</body>
</html>