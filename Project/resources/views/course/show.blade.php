@extends('layouts.app')

@section('template_title')
    {{ $course->name ?? __('Show') . " " . __('Course') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Course</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('courses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Course:</strong>
                                    {{ $course->id_course }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $course->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $course->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Recommendedlevel:</strong>
                                    {{ $course->recommendedlevel }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Durationdays:</strong>
                                    {{ $course->durationdays }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Price:</strong>
                                    {{ $course->price }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
