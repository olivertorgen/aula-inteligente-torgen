<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Aulas</title>
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
<body class="bg-violet-100 font-sans antialiased">
    <div class="container mx-auto p-4 sm:p-8">
        <div class="bg-violet-50 rounded-lg shadow-xl p-6 sm:p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-violet-900">Listado de Aulas</h1>
                <a href="{{ route('aulas.create') }}" class="bg-purple-500 text-white px-4 py-2 rounded-full font-semibold neon-button">
                    Crear Aula
                </a>
            </div>
            
            @if($aulas->isEmpty())
                <p class="text-gray-600 text-center">No hay aulas registradas todavía.</p>
            @else

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden">
                        <thead class="bg-violet-200 text-violet-700 uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Nombre</th>
                                <th class="py-3 px-6 text-left">Ubicación</th>
                                <th class="py-3 px-6 text-left">Capacidad</th>
                                <th class="py-3 px-6 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-violet-900 text-sm font-light">
                            @foreach($aulas as $aula)
                                <tr class="border-b border-violet-200 hover:bg-violet-100 transition-colors duration-200 ease-in-out">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $aula->id }}</td>
                                    <td class="py-3 px-6 text-left">{{ $aula->nombre }}</td>
                                    <td class="py-3 px-6 text-left">{{ $aula->ubicacion }}</td>
                                    <td class="py-3 px-6 text-left">{{ $aula->capacidad }}</td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex item-center">
                                            <a href="{{ route('aulas.show', $aula->id) }}" class="text-purple-600 hover:text-purple-900 transition duration-300 ease-in-out">Ver</a>
                                            <a href="{{ route('aulas.edit', $aula->id) }}" class="ml-4 text-yellow-500 hover:text-yellow-700 transition duration-300 ease-in-out">Editar</a>
                                            <form action="{{ route('aulas.destroy', $aula->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ml-4 text-red-600 hover:text-red-900 transition duration-300 ease-in-out">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</body>
<div class="flex justify-center mt-8">
    <a href="{{ route('home') }}" class="inline-block bg-violet-300 text-violet-900 font-semibold py-3 px-8 rounded-full hover:bg-violet-400 transition duration-300 text-lg">
        Volver a la página de inicio
    </a>
</div>
</html>
