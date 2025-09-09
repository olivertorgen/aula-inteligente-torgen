<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Materia</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Detalles de la materia</h1>
            <p class="text-violet-700 text-center mb-8">Espacio para organización de alumnos y profesores</p>

            <div class="space-y-4">
                <div class="bg-yellow-100 rounded-lg p-4">
                    <h2 class="text-xl font-bold text-violet-900 mb-2">Nombre</h2>
                    <p class="text-violet-800">{{ $materia->nombre }}</p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-4">
                    <h2 class="text-xl font-bold text-violet-900 mb-2">Tipo de Cursada</h2>
                    <p class="text-violet-800">{{ $materia->tipo_cursada }}</p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-4">
                    <h2 class="text-xl font-bold text-violet-900 mb-2">Carrera</h2>
                    <p class="text-violet-800">{{ $materia->carrera }}</p>
                </div>
                <div class="bg-yellow-100 rounded-lg p-4">
                    <h2 class="text-xl font-bold text-violet-900 mb-2">Año</h2>
                    <p class="text-violet-800">{{ $materia->año }}</p>
                </div>
            </div>

            <div class="flex justify-center mt-8 space-x-4">
                <a href="{{ route('materias.edit', $materia->id) }}" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                    Editar
                </a>
                <a href="{{ route('materias.index') }}" class="bg-violet-300 text-violet-900 font-semibold py-3 px-8 rounded-full hover:bg-violet-400 transition duration-300">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>
</body>
</html>
