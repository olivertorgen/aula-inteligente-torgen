<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Editar reserva</h1>
            <p class="text-violet-700 text-center mb-8">Espacio para organización de alumnos y profesores</p>
            
            <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-6">
                    <label for="fecha_hora_inicio" class="block text-violet-800 font-semibold mb-2">Fecha y hora de inicio</label>
                    <input type="datetime-local" id="fecha_hora_inicio" name="fecha_hora_inicio" value="{{ old('fecha_hora_inicio', \Carbon\Carbon::parse($reserva->fecha_hora_inicio)->format('Y-m-d\TH:i')) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                
                <div class="mb-6">
                    <label for="fecha_hora_fin" class="block text-violet-800 font-semibold mb-2">Fecha y hora de fin</label>
                    <input type="datetime-local" id="fecha_hora_fin" name="fecha_hora_fin" value="{{ old('fecha_hora_fin', \Carbon\Carbon::parse($reserva->fecha_hora_fin)->format('Y-m-d\TH:i')) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                </div>
                
                <div class="mb-6">
                    <label for="aula_id" class="block text-violet-800 font-semibold mb-2">Aula</label>
                    <select id="aula_id" name="aula_id" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @foreach($aulas as $aula)
                            <option value="{{ $aula->id }}" @if(old('aula_id', $reserva->aula_id) == $aula->id) selected @endif>{{ $aula->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="docente_id" class="block text-violet-800 font-semibold mb-2">Docente</label>
                    <select id="docente_id" name="docente_id" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @foreach($docentes as $docente)
                            <option value="{{ $docente->id }}" @if(old('docente_id', $reserva->docente_id) == $docente->id) selected @endif>{{ $docente->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-6">
                    <label for="materia_id" class="block text-violet-800 font-semibold mb-2">Materia</label>
                    <select id="materia_id" name="materia_id" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        @foreach($materias as $materia)
                            <option value="{{ $materia->id }}" @if(old('materia_id', $reserva->materia_id) == $materia->id) selected @endif>{{ $materia->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label for="necesita_proyector" class="block text-violet-800 font-semibold mb-2">¿Necesita proyector?</label>
                    <input type="checkbox" id="necesita_proyector" name="necesita_proyector" value="1" {{ old('necesita_proyector', $reserva->necesita_proyector) ? 'checked' : '' }} class="form-checkbox text-purple-500 h-5 w-5 rounded-full">
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                        Actualizar Reserva
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
