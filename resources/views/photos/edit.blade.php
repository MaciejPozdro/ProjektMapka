@extends('layout')

@section('body')
    @if ($errors->any())
        <ul class="ui pointing red basic label">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($photo,['route' => ['photos.update',$photo],'enctype'=>'multipart/form-data', 'method' => 'PUT']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Dodaj zdjecie:') !!}
        {!! Form::file('name', ['class'=>'ui form']) !!}
        {!! Form::label('announcement_id', 'Wybierz ogłoszenie:') !!}
        {!! Form::select('announcement_id',$announcement, $photo->announcement_id, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        <button class="positive ui button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection