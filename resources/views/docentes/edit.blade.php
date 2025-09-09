<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Docente</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Editar docente</h1>
            <p class="text-violet-700 text-center mb-8">Espacio para organización de alumnos y profesores</p>

            <form action="{{ route('docentes.update', $docente->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PATCH')
                <div>
                    <label for="nombre" class="block text-violet-800 font-semibold mb-2">Nombre del docente</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $docente->nombre }}" class="w-full px-4 py-3 rounded-full bg-yellow-100 border-2 border-yellow-300 focus:outline-none focus:border-yellow-500 transition duration-300" required>
                </div>
                <div>
                    <label for="dni" class="block text-violet-800 font-semibold mb-2">DNI del docente</label>
                    <input type="text" name="dni" id="dni" value="{{ $docente->dni }}" class="w-full px-4 py-3 rounded-full bg-yellow-100 border-2 border-yellow-300 focus:outline-none focus:border-yellow-500 transition duration-300" required>
                </div>
                <div>
                    <label for="especialidad" class="block text-violet-800 font-semibold mb-2">Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" value="{{ $docente->especialidad }}" class="w-full px-4 py-3 rounded-full bg-yellow-100 border-2 border-yellow-300 focus:outline-none focus:border-yellow-500 transition duration-300" required>
                </div>

                <div class="flex justify-center space-x-4 mt-8">
                    <button type="submit" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300 ease-in-out">
                        Actualizar docente
                    </button>
                    <a href="{{ route('docentes.index') }}" class="bg-yellow-400 text-violet-900 font-semibold py-3 px-8 rounded-full transition duration-300 ease-in-out hover:bg-yellow-500">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
