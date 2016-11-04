@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url'=>'cars', 'class'=>'form-horizontal', 'role'=>'form']) !!}
            <div class="form-group">
                {!!Form::label('make','Marca')!!}
                {!!Form::text('make')!!}
            </div>
            <div class="form-group">
                {!!Form::label('model','Modelo')!!}
                {!!Form::text('model')!!}
            </div>
            <div class="form-group">
                {!!Form::label('year','Año')!!}
                {!!Form::text('year')!!}
            </div>
            <div class="form-group">
                {!!Form::label('color','Color')!!}
                {!!Form::text('color')!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Registrar', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection