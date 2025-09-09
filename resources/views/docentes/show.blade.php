<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Docente</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Detalles del Docente</h1>
            <p class="text-violet-700 text-center mb-8">Información detallada del docente</p>
            
            <div class="space-y-4">
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <p class="text-violet-800 font-semibold">Nombre:</p>
                    <p class="text-violet-600">{{ $docente->nombre }}</p>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <p class="text-violet-800 font-semibold">DNI:</p>
                    <p class="text-violet-600">{{ $docente->dni }}</p>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg">
                    <p class="text-violet-800 font-semibold">Especialidad:</p>
                    <p class="text-violet-600">{{ $docente->especialidad }}</p>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <a href="{{ route('docentes.index') }}" class="bg-yellow-400 text-violet-900 font-semibold py-3 px-8 rounded-full transition duration-300 ease-in-out hover:bg-yellow-500">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>
</body>
</html>
