@extends('layouts.admin')

@section('content')
    <h1>Edit Posts</h1>

    {!! Form::model($post , ['method'=>'PATCH','action'=>['AdminPostsController@update' , $post->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose Categories'] + $categories ,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Upload:') !!}
        {!! Form::file('photo_id',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Description:') !!}
        {!! Form::textarea('body', null ,['class'=>'form-control','rows'=>3]) !!}
    </div>

    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    <div class="row"   style="margin-top: 20px;">
        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Post',['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    <div class="row" style="margin-top: 20px;">
        <div class="col">
            @include('includes.form_error')
        </div>
    </div>
@stop