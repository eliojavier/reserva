@extends('layouts.app')

@section('content')
    {{dd($cars)}}
    @foreach ($cars as $car)

        {{--{!!Form::label('make', $car->make)!!}--}}
        {{--{!!Form::label('model', $car->model)!!}--}}
        {{--{!!Form::label('year', $car->year)!!}--}}
        {{--{!!Form::label('color', $car->color)!!}--}}
    @endforeach
@endsection