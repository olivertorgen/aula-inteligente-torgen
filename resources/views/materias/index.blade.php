<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Materias</title>
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
        <div class="bg-violet-50 rounded-lg shadow-xl p-6 sm:p-8">
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Listado de materias</h1>
            <p class="text-violet-700 text-center mb-8">Espacio para organización de alumnos y profesores</p>
            
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-violet-900">Materias registradas</h2>
                <a href="{{ route('materias.create') }}" class="bg-purple-500 text-white font-semibold py-2 px-6 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                    Agregar nueva materia
                </a>
            </div>

            <div class="overflow-x-auto bg-violet-100 rounded-lg shadow-inner">
                <table class="w-full text-left table-auto">
                    <thead>
                        <tr class="bg-yellow-200 text-violet-900 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Tipo de Cursada</th>
                            <th class="py-3 px-6 text-left">Carrera</th>
                            <th class="py-3 px-6 text-left">Año</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-violet-800 text-sm font-light">
                        @foreach ($materias as $materia)
                        <tr class="border-b border-yellow-300 hover:bg-yellow-50 transition duration-300">
                            <td class="py-3 px-6">{{ $materia->nombre }}</td>
                            <td class="py-3 px-6">{{ $materia->tipo_cursada }}</td>
                            <td class="py-3 px-6">{{ $materia->carrera }}</td>
                            <td class="py-3 px-6">{{ $materia->año }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center space-x-2">
                                    <a href="{{ route('materias.show', $materia->id) }}" class="transform hover:scale-110">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('materias.edit', $materia->id) }}" class="transform hover:scale-110">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta materia?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="transform hover:scale-110">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
