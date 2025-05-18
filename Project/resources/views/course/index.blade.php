@extends('layouts.app')

@section('template_title')
    Courses
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Courses') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('courses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
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
                                        <th>No</th>
                                        
									<th >Id Course</th>
									<th >Name</th>
									<th >Description</th>
									<th >Recommendedlevel</th>
									<th >Durationdays</th>
									<th >Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $course->id_course }}</td>
										<td >{{ $course->name }}</td>
										<td >{{ $course->description }}</td>
										<td >{{ $course->recommendedlevel }}</td>
										<td >{{ $course->durationdays }}</td>
										<td >{{ $course->price }}</td>

                                            <td>
                                                <form action="{{ route('courses.destroy', $course->id_course) }}" method="GET">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('courses.show', $course->id_course) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('courses.edit', $course->id_course) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
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
