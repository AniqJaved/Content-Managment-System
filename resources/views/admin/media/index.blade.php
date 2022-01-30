@extends('layouts.admin')
@section('content')
    <h1>Media</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Created Date</th>
        </tr>
        </thead>
        <tbody>
        @if($photos)
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img src="{{$photo->file}}" height="50" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no photo'}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@stop