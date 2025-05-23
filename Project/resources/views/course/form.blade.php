<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_course" class="form-label">{{ __('Id Course') }}</label>
            <input type="text" name="id_course" class="form-control @error('id_course') is-invalid @enderror" value="{{ old('id_course', $course?->id_course) }}" id="id_course" placeholder="Id Course">
            {!! $errors->first('id_course', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $course?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $course?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="recommendedlevel" class="form-label">{{ __('Recommendedlevel') }}</label>
            <input type="text" name="recommendedlevel" class="form-control @error('recommendedlevel') is-invalid @enderror" value="{{ old('recommendedlevel', $course?->recommendedlevel) }}" id="recommendedlevel" placeholder="Recommendedlevel">
            {!! $errors->first('recommendedlevel', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="durationdays" class="form-label">{{ __('Durationdays') }}</label>
            <input type="text" name="durationdays" class="form-control @error('durationdays') is-invalid @enderror" value="{{ old('durationdays', $course?->durationdays) }}" id="durationdays" placeholder="Durationdays">
            {!! $errors->first('durationdays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="price" class="form-label">{{ __('Price') }}</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $course?->price) }}" id="price" placeholder="Price">
            {!! $errors->first('price', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>