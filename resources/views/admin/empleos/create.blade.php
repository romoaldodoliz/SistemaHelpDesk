@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.empleo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.empleos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">{{ trans('cruds.empleo.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}">
                @if($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.empleo.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection