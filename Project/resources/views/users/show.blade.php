@extends('layouts.app')

@section('template_title')
    Detalles del Usuario
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10">
    <div class="bg-gray-800 rounded-xl shadow-md p-6 space-y-5">
        <h2 class="text-3xl font-bold text-white mb-4">{{ $user->name }}</h2>

        <div>
            <p class="text-gray-400"><span class="font-semibold text-white">Email:</span> {{ $user->email }}</p>
            <p class="text-gray-400"><span class="font-semibold text-white">Rol:</span> {{ $user->role }}</p>
        </div>

        <a href="{{ route('users.edit', $user->id) }}" class="inline-block text-yellow-400 hover:underline">Editar</a>
    </div>
</div>
@endsection