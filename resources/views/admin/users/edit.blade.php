@extends('layouts.admin')

@section('content')
    <h1>Edit Users</h1>
 <div class="row">
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : "https://source.unsplash.com/400x400/?nature,water"}}" alt="" class="img-responsive img-rounded">
    </div>


    <div class="col-sm-9">
            {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id', [''=>'Choose option'] + $roles, null , ['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array(1 => 'Active' , 0 =>'Inactive' ),null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('photo_id','Upload:') !!}
                {!! Form::file('photo_id',['class'=>'form-control']) !!}
            </div>

            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}

        <div class="row"   style="margin-top: 20px;">
                {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
                        </div>

                {!! Form::close() !!}
        </div>

    </div>

 </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col">
           @include('includes.form_error')
        </div>
    </div>
@endsection