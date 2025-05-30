@extends('layouts.app')

@section('template_title')
    Crear Curso
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="bg-gray-800 rounded-xl shadow-md p-6 space-y-6">
        <h2 class="text-3xl font-bold text-white">Agregar Nuevo Curso</h2>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-white">Nombre del Curso</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-white">Descripción</label>
                <textarea name="description" id="description" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600" required></textarea>
            </div>

            <div class="mb-4">
                <label for="recommendedlevel" class="block text-sm font-medium text-white">Nivel Recomendado</label>
                <input type="number" name="recommendedlevel" id="recommendedlevel" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label for="durationdays" class="block text-sm font-medium text-white">Duración (días)</label>
                <input type="number" name="durationdays" id="durationdays" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-white">Precio</label>
                <input type="number" step="0.01" name="price" id="price" class="mt-1 block w-full rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">Guardar Curso</button>
            </div>
        </form>
    </div>
</div>
@endsection
