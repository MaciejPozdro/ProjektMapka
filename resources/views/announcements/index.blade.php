@extends('layout')



@section('body')
    <a class="ui button" href="{{route('announcements.create')}}">Dodaj ogłoszenie</a>
    <table class="ui celled table">

        @foreach($announcements as $announcement)
            <tr>
                <td>{{$announcement->id}}</td>
                <td>{{$announcement->price}}</td>
                <td>{{$announcement->address}}</td>
                <td>{{$announcement->post_code}}</td>
                <td>{{$announcement->description}}</td>
                <td>{{$announcement->contact}}</td>
                <td>{{$announcement->cities_id}}</td>

                <td><a class="ui primary button" href="{{route('announcements.edit',$announcement)}}">Edit </a>
                </td>
                <td>
                    {!!Form::model($announcement,['route' =>['announcements.delete',$announcement],'method' =>'DELETE']) !!}
                    <button class="negative ui button">Delete</button>
                    {!!Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

@endsection