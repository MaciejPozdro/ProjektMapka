@extends('layout')



@section('body')
    <a class="ui button" href="{{route('photos.add')}}">Dodaj zdjecie</a>
    <table class="ui celled table">

        @foreach($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->name}}</td>
                <td>{{$photo->announcement_id}}</td>
                <td><a class="ui primary button" href="{{route('photos.edit',$photo)}}">Edit </a>
                </td>
                <td>
                    {!!Form::model($photo,['route' =>['photos.delete',$photo],'method' =>'DELETE']) !!}
                    <button class="negative ui button">Delete</button>
                    {!!Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

@endsection