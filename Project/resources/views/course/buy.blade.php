@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? __('Comprar') . ' ' . __('Curso') }}
@endsection

@section('content')
<div class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold text-white mb-6 text-center">Compra el curso: {{ $course->name }}</h2>

    <form action="{{ route('courses.purchase', $course->id_course) }}" method="POST" class="bg-gray-800 p-6 rounded-xl shadow-md space-y-5">
        @csrf

        <div>
            <label for="card_number" class="block text-sm font-medium text-gray-300 mb-1">Número de Tarjeta</label>
            <input type="text" name="card_number" id="card_number" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="card_holder" class="block text-sm font-medium text-gray-300 mb-1">Nombre en la Tarjeta</label>
            <input type="text" name="card_holder" id="card_holder" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="expiry_date" class="block text-sm font-medium text-gray-300 mb-1">Fecha de Expiración</label>
            <input type="text" name="expiry_date" id="expiry_date" placeholder="MM/AA" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label for="cvv" class="block text-sm font-medium text-gray-300 mb-1">CVV</label>
            <input type="text" name="cvv" id="cvv" required class="w-full px-4 py-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded shadow transition duration-300">
            Pagar
        </button>
    </form>
</div>
@endsection
