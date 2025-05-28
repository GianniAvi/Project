@extends('layouts.app')

@section('template_title')
    Cursos
@endsection

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center text-white mb-8">Explora Nuestros Cursos</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($courses as $course)
            <div class="bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300">
                <h3 class="text-xl font-semibold text-white mb-2">{{ $course->name }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ $course->description }}</p>
                <ul class="text-sm text-gray-300 mb-4 space-y-1">
                    <li><span class="font-medium">Nivel recomendado:</span> {{ $course->recommendedlevel }}</li>
                    <li><span class="font-medium">Duración:</span> {{ $course->durationdays }} días</li>
                    <li><span class="font-medium">Precio:</span> ${{ $course->price }}</li>
                </ul>
                <div class="flex justify-between mt-4">
                    <a href="{{ route('courses.show', $course->id_course) }}"
                       class="text-blue-400 hover:underline font-medium text-sm">
                        Ver detalles
                    </a>
                    <a href="{{ route('courses.buy', $course->id_course) }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-300">
                        Comprar
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
