@extends('layouts.app')

@section('template_title')
    Detalles del Curso
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="bg-gray-800 rounded-xl shadow-md p-6 text-white">
        <h2 class="text-3xl font-bold mb-4">{{ $course->name }}</h2>

        <div class="mb-4">
            <p><span class="font-semibold">Descripción:</span> {{ $course->description }}</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <p><span class="font-semibold">Nivel Recomendado:</span> {{ $course->recommendedlevel }}</p>
            <p><span class="font-semibold">Duración:</span> {{ $course->durationdays }} días</p>
            <p><span class="font-semibold">Precio:</span> ${{ $course->price }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('dashboard') }}" class="inline-block text-sm text-blue-400 hover:underline">← Volver al panel</a>
        </div>
    </div>
</div>
@endsection
