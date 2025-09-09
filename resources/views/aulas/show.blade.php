<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Aula</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Detalles del Aula</h1>
            
            <div class="space-y-4 text-violet-800">
                <p><strong>ID:</strong> {{ $aula->id }}</p>
                <p><strong>Nombre:</strong> {{ $aula->nombre }}</p>
                <p><strong>Ubicación:</strong> {{ $aula->ubicacion }}</p>
                <p><strong>Capacidad:</strong> {{ $aula->capacidad }}</p>
                <p><strong>Creado:</strong> {{ $aula->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Última actualización:</strong> {{ $aula->updated_at->format('d/m/Y H:i') }}</p>
            </div>
            
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('aulas.edit', $aula->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded-full font-semibold neon-button hover:bg-purple-600 transition duration-300 ease-in-out">
                    Editar
                </a>
                <a href="{{ route('aulas.index') }}" class="bg-yellow-400 text-violet-900 px-4 py-2 rounded-full font-semibold transition duration-300 ease-in-out hover:bg-yellow-500">
                    Volver
                </a>
            </div>

            <!-- Aquí podrías añadir más detalles, como reservas o equipamiento -->
            <div class="mt-8">
                <!-- Por ejemplo: 
                <h2 class="text-2xl font-bold text-violet-900 mb-4">Reservas</h2>
                <ul>
                    @foreach($aula->reservas as $reserva)
                        <li>{{ $reserva->fecha }} - {{ $reserva->horario }}</li>
                    @endforeach
                </ul>
                -->
            </div>
        </div>
    </div>
</body>
</html>
