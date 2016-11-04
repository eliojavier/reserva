@section('content')
    <div class="form-group">
        {!!Form::label('make','Marca')!!}
        {!!Form::text('make')!!}
    </div>
    <div class="form-group">
        {!!Form::label('year','Año')!!}
        {!!Form::text('year')!!}
    </div>
    <div class="form-group">
        {!!Form::label('color','Color')!!}
        {!!Form::text('color')!!}
    </div>
@endsection