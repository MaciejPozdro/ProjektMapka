@extends('layout')

@section('body')
    @if ($errors->any())
        <ul class="ui pointing red basic label">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'announcements.store']) !!}
    <div class="ui form">
        {!! Form::label('price', 'Cena:') !!}
        {!! Form::number('price', null, ['class'=>'ui form']) !!}
        {!! Form::label('address', 'Adres:') !!}
        {!! Form::text('address', null, ['class'=>'ui form']) !!}
        {!! Form::label('post_code','Kod pocztowy:') !!}
        {!! Form::number('post_code', null, ['class'=>'ui form']) !!}
        {!! Form::label('description', 'Opis ogłoszenia:') !!}
        {!! Form::text('description', null, ['class'=>'ui form']) !!}
        {!! Form::label('contact', 'Kontakt:') !!}
        {!! Form::number('contact', null, ['class'=>'ui form']) !!}
        {!! Form::label('city_id', 'Miasto:') !!}
        {!! Form::select('city_id',$cities,null, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        <button class="positive ui button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection