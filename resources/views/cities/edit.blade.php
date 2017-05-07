@extends('layout')

@section('body')
    @if ($errors->any())
        <ul class="ui pointing red basic label">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    {!! Form::model($city,['route' => ['cities.update',$city],'method' => 'PUT'])!!}
    <div class="ui form">
        {!! Form::label('city_name', 'Nazwa miasta:') !!}
        {!! Form::text('city_name',$city->city_name,['class'=>'form-control']) !!}
    </div>
    <div class="ui form">
        <button class="positive ui button">Zapisz</button>
    </div>
    {!! Form::close() !!}

@endsection