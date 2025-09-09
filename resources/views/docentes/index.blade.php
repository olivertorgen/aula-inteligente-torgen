<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Docentes</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Listado de Docentes</h1>

            <div class="text-center mb-6">
                <a href="{{ route('docentes.create') }}" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300 ease-in-out">
                    Crear nuevo docente
                </a>
            </div>

            @if($docentes->isEmpty())
                <p class="text-violet-700 text-center">No hay docentes registrados.</p>
            @else
                <div class="mt-8">
                    <table class="min-w-full bg-white rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-yellow-400 text-violet-900 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">DNI</th>
                                <th class="py-3 px-6 text-left">Especialidad</th>
                                <th class="py-3 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-violet-700 text-sm font-light">
                            @foreach($docentes as $docente)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $docente->nombre }} {{ $docente->apellido }}</td>
                                    <td class="py-3 px-6 text-left">{{ $docente->dni }}</td>
                                    <td class="py-3 px-6 text-left">{{ $docente->especialidad }}</td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href="{{ route('docentes.edit', $docente->id) }}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                ✏️
                                            </a>
                                            <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110" onclick="return confirm('¿Estás seguro de que quieres eliminar este docente?');">
                                                    🗑️
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="text-center mt-8">
                <a href="{{ route('home') }}" class="bg-yellow-400 text-violet-900 font-semibold py-3 px-8 rounded-full transition duration-300 ease-in-out hover:bg-yellow-500">
                    Volver a la página de inicio
                </a>
            </div>
        </div>
    </div>
</body>
</html>