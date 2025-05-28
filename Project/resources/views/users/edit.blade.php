@extends('layouts.app')

@section('template_title')
    Editar Usuario
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="bg-gray-800 rounded-xl shadow-md p-6">
        <h2 class="text-3xl font-bold text-white mb-6">Editar Usuario</h2>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-300 mb-1">Nombre</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full px-4 py-2 rounded bg-gray-900 text-white">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-300 mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full px-4 py-2 rounded bg-gray-900 text-white">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-300 mb-1">Rol</label>
                <select name="role" id="role" class="w-full px-4 py-2 rounded bg-gray-900 text-white">
                    <option value="client" {{ $user->role === 'client' ? 'selected' : '' }}>Client</option>
                    <option value="developer" {{ $user->role === 'developer' ? 'selected' : '' }}>Developer</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Guardar Cambios</button>
        </form>
    </div>
</div>
@endsection
