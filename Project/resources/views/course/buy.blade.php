@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? __('Show') . " " . __('Course') }}
@endsection

@section('content')
<div class="container">
    <h2>Comprar Curso: {{ $course->name }}</h2>
    <form action="{{ route('courses.purchase', $course->id_course) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="card_number">Número de Tarjeta</label>
            <input type="text" name="card_number" id="card_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="card_holder">Nombre en la Tarjeta</label>
            <input type="text" name="card_holder" id="card_holder" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Fecha de Expiración</label>
            <input type="text" name="expiry_date" id="expiry_date" class="form-control" placeholder="MM/AA" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" name="cvv" id="cvv" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Pagar</button>
    </form>
</div>
@endsection

