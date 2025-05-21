@extends('layouts.app')

@section('template_title')
    Courses
@endsection

@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th >Nombre</th>
                                        <th >Descripción</th>
                                        <th >Nivel recomendado</th>
                                        <th >Duración (en días)</th>
                                        <th >Precio (en pesos)</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>                                            
                                            <td >{{ $course->name }}</td>
                                            <td >{{ $course->description }}</td>
                                            <td >{{ $course->recommendedlevel }}</td>
                                            <td >{{ $course->durationdays }}</td>
                                            <td >{{ $course->price }}</td>

                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('courses.show', $course->id_course) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                                </a>

                                                <a class="btn btn-sm btn-success" href="{{ route('courses.buy', $course->id_course) }}">
                                                    <i class="fa fa-fw fa-shopping-cart"></i> {{ __('Comprar') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $courses->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
