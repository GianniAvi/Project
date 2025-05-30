@extends('layouts.app')

@section('template_title')
    Bienvenido
@endsection

@section('content')
    <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8 text-white">
        <h1 class="text-3xl font-bold mb-6">🎉 ¡Bienvenido(a) de nuevo, {{ Auth::user()->name }}!</h1>

        @if(Auth::user()->role == 'client')
            <p class="mb-8 text-lg">Nos alegra tenerte de vuelta en <strong>Tech-Olote</strong>, tu espacio para descubrir, aprender y crear. Aquí tienes un resumen de tu actividad y todo lo que puedes hacer ahora mismo:</p>

            {{-- Mis Cursos --}}
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">📚 Mis Cursos</h2>
                <p class="mb-2">Revisa tu progreso, continúa con las lecciones activas o explora contenido adicional relacionado con tus intereses.</p>
                <a href="{{ route('library') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">Ver mi biblioteca</a>
            </div>

            {{-- Recomendaciones --}}
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">🚀 Explora nuevos conocimientos</h2>
                <ul class="list-disc list-inside mb-3">
                    <li><strong>Nivel básico:</strong> Curso básico para conocer los fundamentos de la robótica y su historia.</li>
                    <li><strong>Nivel intermedio:</strong> Desarrolla habilidades de construcción y programación con LEGO Mindstorms.</li>
                    <li><strong>Nivel avanzado:</strong> Inteligencia artificial para mejorar la autonomía de los robots</li>
                </ul>
                <a href="{{ route('courses.index') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">Ir a Cursos</a>
            </div>

            {{-- Tip del Día --}}
            <div class="mb-10">
                <h2 class="text-2xl font-semibold mb-3">🧠 Tip del día</h2>
                <blockquote class="italic text-lg text-gray-300 border-l-4 border-blue-500 pl-4">
                    “Aprender no es un acto de consumir ideas, sino de crearlas y compartirlas.” — Paulo Freire
                </blockquote>
            </div>

            {{-- Ayuda --}}
            <div>
                <h2 class="text-2xl font-semibold mb-3">👥 ¿Necesitas ayuda?</h2>
                <p>Estamos aquí para apoyarte en cada paso de tu formación.</p>
                <div class="mt-2">
                    <a href="mailto:soporte@techolote.com" class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-semibold px-4 py-2 rounded">Contáctanos</a>
                </div>
            </div>
        @endif
        @if(Auth::user()->role == 'developer')  
            <p class="mb-8 text-lg">Nos alegra tenerte de vuelta en <strong>Tech-Olote</strong>.</p>
            
            <!-- Tabla de Usuarios -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-white mb-2">Usuarios</h3>
                <table class="w-full bg-gray-800 text-white rounded">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr class="border-t border-gray-700">
                            <td class="px-4 py-2">{{ $u->name }}</td>
                            <td class="px-4 py-2">{{ $u->email }}</td>
                            <td class="px-4 py-2 flex gap-2">
                                <a href="{{ route('users.show', $u->id) }}" class="text-blue-400 underline">Ver</a>
                                <a href="{{ route('users.edit', $u->id) }}" class="text-yellow-400 underline">Editar</a>
                                <form method="POST" action="{{ route('users.destroy', $u->id) }}">
                                    @csrf @method('DELETE')
                                    <button class="text-red-400 underline" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Tabla de Cursos -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-white mb-2">Cursos</h3>
                <table class="w-full bg-gray-800 text-white rounded">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Nivel</th>
                            <th class="px-4 py-2">Duración</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr class="border-t border-gray-700">
                                <td class="px-4 py-2">{{ $course->name }}</td>
                                <td class="px-4 py-2">{{ $course->recommendedlevel }}</td>
                                <td class="px-4 py-2">{{ $course->durationdays }} días</td>
                                <td class="px-4 py-2 flex gap-2">
                                    <a href="{{ route('admin.courses.show', $course->id_course) }}" class="text-blue-400 underline">Ver</a>
                                    <a href="{{ route('admin.courses.edit', $course->id_course) }}" class="text-yellow-400 underline">Editar</a>
                                    <form action="{{ route('admin.courses.destroy', $course->id_course) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 underline">Eliminar</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end mb-4">
                <a href="{{ route('courses.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">Agregar Curso</a>
            </div>
        @endif   
    </div>
@endsection
