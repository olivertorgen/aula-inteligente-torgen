<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Reservas</title>
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
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-violet-900">Listado de reservas</h1>
            <a href="{{ route('reservas.create') }}" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                Agregar nueva reserva
            </a>
        </div>
        
        <p class="text-violet-700 mb-8">Espacio para organización de alumnos y profesores</p>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-violet-50 rounded-lg shadow-xl p-6 overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Aula</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Docente</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Materia</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Inicio</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Fin</th>
                        <th class="px-6 py-3 border-b-2 border-violet-200 text-left text-sm leading-4 font-bold text-violet-800 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($reservas as $reserva)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->aula->nombre }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->docente->nombre }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->materia->nombre }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->fecha_hora_inicio }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-violet-200">{{ $reserva->fecha_hora_fin }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-violet-200 text-sm leading-5 font-medium">
                                <a href="{{ route('reservas.show', $reserva->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-4">Ver</a>
                                <a href="{{ route('reservas.edit', $reserva->id) }}" class="text-purple-600 hover:text-purple-900 mr-4">Editar</a>
                                <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de que quieres eliminar esta reserva?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
