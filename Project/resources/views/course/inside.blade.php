@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? 'Curso' }}
@endsection

@section('content')
    <div class="flex h-screen bg-gray-900 text-white">

        <!-- Panel lateral fijo -->
        <aside class="w-64 bg-gray-800 p-4">
            <h2 class="text-xl font-semibold mb-4">Lecciones</h2>
            <ul class="space-y-2">
                @foreach ($lessons as $lesson)
                    <li>
                        <a href="#lesson-{{ $lesson->id }}" class="block px-2 py-1 rounded hover:bg-gray-700">
                            {{ $lesson->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-1 p-6 overflow-y-auto">
            <h1 class="text-3xl font-bold mb-4">{{ $course->name }}</h1>

            @foreach ($lessons as $lesson)
                <section id="lesson-{{ $lesson->id }}" class="mb-10">
                    <h2 class="text-2xl font-semibold mb-2">{{ $lesson->title }}</h2>
                    <div class="aspect-video bg-black mb-4 rounded shadow">
                        <iframe class="w-full h-full" src="{{ $lesson->video_url }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </section>
            @endforeach
        </main>

    </div>
@endsection