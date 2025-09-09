<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
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
            <h1 class="text-3xl font-bold text-violet-900 text-center mb-6">Editar materia</h1>
            <p class="text-violet-700 text-center mb-8">Espacio para organización de alumnos y profesores</p>
            
            <form action="{{ route('materias.update', $materia->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-6">
                    <label for="nombre" class="block text-violet-800 font-semibold mb-2">Nombre de la materia</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $materia->nombre) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Ej: Programación">
                </div>
                
                <div class="mb-6">
                    <label for="tipo_cursada" class="block text-violet-800 font-semibold mb-2">Tipo de cursada</label>
                    <select id="tipo_cursada" name="tipo_cursada" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="anual" @if(old('tipo_cursada', $materia->tipo_cursada) == 'anual') selected @endif>Anual</option>
                        <option value="semestral" @if(old('tipo_cursada', $materia->tipo_cursada) == 'semestral') selected @endif>Semestral</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="carrera" class="block text-violet-800 font-semibold mb-2">Carrera</label>
                    <input type="text" id="carrera" name="carrera" value="{{ old('carrera', $materia->carrera) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Ej: Ingeniería en Informática">
                </div>

                <div class="mb-6">
                    <label for="año" class="block text-violet-800 font-semibold mb-2">Año</label>
                    <input type="number" id="año" name="año" value="{{ old('año', $materia->año) }}" class="w-full bg-yellow-200 text-violet-900 border border-yellow-300 rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-purple-500" placeholder="Ej: 2024">
                </div>

                <div class="flex justify-center mt-8">
                    <button type="submit" class="bg-purple-500 text-white font-semibold py-3 px-8 rounded-full neon-button hover:bg-purple-600 transition duration-300">
                        Actualizar Materia
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
