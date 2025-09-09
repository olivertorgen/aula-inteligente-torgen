<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Inteligente Torgen</title>
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
        <div class="bg-violet-50 rounded-lg shadow-xl p-6 sm:p-8 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-violet-900 mb-4">Aula Inteligente Torgen</h1>
            <p class="text-xl text-violet-700 mb-8">La herramienta que revoluciona la gestión académica para estudiantes y profesores.</p>
            
            <img src="https://placehold.co/600x400/FFF3DA/6B46C1?text=Sistema+de+Gesti%C3%B3n+de+Aulas" alt="Imagen representativa de la aplicación" class="mx-auto rounded-lg shadow-md mb-8">

            <div class="space-y-4">
                <a href="{{ route('reservas.index') }}" class="inline-block bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300 text-lg">
                    Ver Reservas
                </a>
                <a href="{{ route('aulas.index') }}" class="inline-block bg-violet-300 text-violet-900 font-semibold py-3 px-8 rounded-full hover:bg-violet-400 transition duration-300 text-lg">
                    Gestionar Aulas
                </a>
                <a href="{{ route('docentes.index') }}" class="inline-block bg-violet-300 text-violet-900 font-semibold py-3 px-8 rounded-full hover:bg-violet-400 transition duration-300 text-lg">
                    Gestionar Docentes
                </a>
                <a href="{{ route('materias.index') }}" class="inline-block bg-violet-300 text-violet-900 font-semibold py-3 px-8 rounded-full hover:bg-violet-400 transition duration-300 text-lg">
                    Gestionar Materias
                </a>
            </div>
        </div>
    </div>
</body>
</html>
