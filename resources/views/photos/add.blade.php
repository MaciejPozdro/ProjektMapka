@extends('layout')

@section('body')
    @if ($errors->any())
        <ul class="ui pointing red basic label">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'photos.store','enctype'=>'multipart/form-data']) !!}
    <div class="ui form">
        {!! Form::label('name', 'Dodaj zdjecie:') !!}
        {!! Form::file('name', null, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        <button class="positive ui button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection