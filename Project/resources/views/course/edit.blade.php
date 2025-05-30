@extends('layouts.app')

@section('template_title')
    Editar Curso
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="bg-gray-800 rounded-xl shadow-md p-6 space-y-6">
        <h2 class="text-3xl font-bold text-white">Editar Curso</h2>

        <form action="{{ route('courses.update', $course->id_course) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-white">Nombre del Curso</label>
                <input type="text" name="name" id="name" value="{{ old('name', $course->name) }}" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-white">Descripción</label>
                <textarea name="description" id="description" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-blue-500">{{ old('description', $course->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="recommendedlevel" class="block text-sm font-medium text-white">Nivel Recomendado</label>
                <input type="number" name="recommendedlevel" id="recommendedlevel" value="{{ old('recommendedlevel', $course->recommendedlevel) }}" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="durationdays" class="block text-sm font-medium text-white">Duración (días)</label>
                <input type="number" name="durationdays" id="durationdays" value="{{ old('durationdays', $course->durationdays) }}" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-white">Precio</label>
                <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $course->price) }}" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600 focus:ring focus:ring-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
