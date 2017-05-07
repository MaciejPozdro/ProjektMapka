@extends('layout')



@section('body')
    <a class="ui button" href="{{route('cities.create')}}">Dodaj miasto</a>
    <table class="ui celled table">
    <td>
    <th>ID</th>
    <th>CITY</th>
    </td>
    @foreach($cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->city_name}}</td>
            <td><a class="ui primary button" href="{{route('cities.edit',$city)}}">Edit </a>
            </td>
            <td>
                {!!Form::model($city,['route' =>['cities.delete',$city],'method' =>'DELETE']) !!}
                <button class="negative ui button">Delete</button>
                {!!Form::close() !!}
            </td>
        </tr>
    @endforeach
    </table>

@endsection