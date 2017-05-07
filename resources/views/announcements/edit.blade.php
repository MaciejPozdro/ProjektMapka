@extends('layout')

@section('body')
    @if ($errors->any())
        <ul class="ui pointing red basic label">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{--{!! Form::model(['route' => 'announcements.update']) !!}--}}
    {!! Form::model($announcement,['route' => ['announcements.update',$announcement],'method' => 'PUT'])!!}
    <div class="ui form">
        {!! Form::label('price', 'Cena:') !!}
        {!! Form::number('price', $announcement->price, ['class'=>'ui form']) !!}
        {!! Form::label('address', 'Adres:') !!}
        {!! Form::text('address', $announcement->address, ['class'=>'ui form']) !!}
        {!! Form::label('post_code', 'Kod pocztowy:') !!}
        {!! Form::text('post_code', $announcement->post_code, ['class'=>'ui form']) !!}
        {!! Form::label('description', 'Opis ogłoszenia:') !!}
        {!! Form::text('description', $announcement->description, ['class'=>'ui form']) !!}
        {!! Form::label('contact', 'Kontakt:') !!}
        {!! Form::number('contact', $announcement->contact, ['class'=>'ui form']) !!}
        {!! Form::label('city_id', 'Miasto:') !!}
        {!! Form::select('city_id',$cities,$announcement->city_name, ['class'=>'ui form']) !!}
    </div>
    <div class="ui form">
        <button class="positive ui button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection