@extends('layouts.app')

@section('template_title')
    {{ $course->name }}
@endsection

@section('content')
<div class="flex h-screen bg-gray-900 text-white">

    <!-- Menú hamburguesa -->
    <div class="w-64 bg-gray-800 p-4 hidden md:block">
        <h3 class="text-lg font-bold mb-4">Lecciones</h3>
        <ul class="space-y-2">
            @foreach ($lessons as $lesson)
                <li class="hover:text-blue-400 cursor-pointer">
                    {{ $lesson->title }}
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Botón hamburguesa para móvil -->
    <div class="md:hidden absolute top-4 left-4 z-50">
        <button onclick="document.getElementById('menu').classList.toggle('hidden')" class="text-white focus:outline-none">
            &#9776;
        </button>
    </div>

    <!-- Contenido del curso -->
    <div class="flex-1 p-8 overflow-y-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $course->name }}</h1>
        <p class="text-gray-400 mb-8">{{ $course->description }}</p>

        <div class="bg-gray-800 p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Bienvenido/a</h2>
            <p class="text-gray-300">Selecciona una lección del menú para comenzar.</p>
        </div>
    </div>

</div>
@endsection