<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aula</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Editar Aula</h1>

            <form action="{{ route('aulas.update', $aula->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="nombre" class="block text-violet-800 text-sm font-semibold mb-2">Nombre del Aula</label>
                    <input type="text" name="nombre" id="nombre" class="w-full px-4 py-2 border border-violet-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" value="{{ old('nombre', $aula->nombre) }}" required>
                </div>

                <div class="mb-4">
                    <label for="ubicacion" class="block text-violet-800 text-sm font-semibold mb-2">Ubicación</label>
                    <input type="text" name="ubicacion" id="ubicacion" class="w-full px-4 py-2 border border-violet-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" value="{{ old('ubicacion', $aula->ubicacion) }}" required>
                </div>

                <div class="mb-6">
                    <label for="capacidad" class="block text-violet-800 text-sm font-semibold mb-2">Capacidad</label>
                    <input type="number" name="capacidad" id="capacidad" class="w-full px-4 py-2 border border-violet-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400" value="{{ old('capacidad', $aula->capacidad) }}" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full bg-purple-500 text-white px-4 py-2 rounded-full font-semibold neon-button hover:bg-purple-600 transition duration-300 ease-in-out">
                        Guardar Cambios
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center">
                <a href="{{ route('aulas.index') }}" class="text-violet-600 hover:text-violet-900 transition duration-300 ease-in-out font-medium">Cancelar y volver</a>
            </div>
        </div>
    </div>
</body>
</html>
