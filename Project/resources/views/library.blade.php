@extends('layouts.app')

@section('template_title')
    Cursos
@endsection

@section('content')
    <div class="py-8 px-6">
        @if ($courses->isEmpty())
            <div class="text-center text-gray-300 mt-10">
                <p class="text-xl">Aún no has comprado ningún curso.</p>
                <p class="mt-2 text-sm text-gray-400">Explora nuestra <a href="{{ route('courses.index') }}" class="text-blue-400 hover:underline">oferta de cursos</a> y comienza tu aprendizaje hoy.</p>
            </div>
        @else
            <h2 class="text-3xl font-bold text-center text-white mb-8">Tus Cursos Comprados</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($courses as $course)
                    <div class="bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                        <h3 class="text-xl font-semibold text-white mb-2">{{ $course->name }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ $course->description }}</p>
                        <div class="text-sm text-gray-300 mb-1">
                            <span class="font-medium">Nivel recomendado:</span> {{ $course->recommendedlevel }}
                        </div>
                        <div class="text-sm text-gray-300 mb-1">
                            <span class="font-medium">Duración:</span> {{ $course->durationdays }} días
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('library.course', $course->id_course) }}" 
                                class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-300">
                                Ir al curso
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection    
