<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aire Acondicionado</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Editar aire acondicionado</h1>
            <p class="text-violet-700 text-center mb-8">Modifica los detalles del aire acondicionado seleccionado.</p>
            
            <form action="{{ route('aires_acondicionados.update', $aire->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-6">
                    <label for="modelo" class="block text-violet-800 font-semibold mb-2">Modelo</label>
                    <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $aire->modelo) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                </div>
                
                <div class="mb-6">
                    <label for="aula_id" class="block text-violet-800 font-semibold mb-2">Aula</label>
                    <select id="aula_id" name="aula_id" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500" required>
                        @foreach($aulas as $aula)
                            <option value="{{ $aula->id }}" @if(old('aula_id', $aire->aula_id) == $aula->id) selected @endif>{{ $aula->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                        Actualizar Aire Acondicionado
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
