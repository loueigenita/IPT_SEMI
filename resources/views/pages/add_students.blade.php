@extends('layouts.app')

@section('content')

    <div class="container w-25 border mt-4">
        <h1 class="text-center">Add new student</h1>

        @if($message = Session::get('success'))

        <div class="alert alert-success alert-block text-center">
                <strong>{{ $message }}</strong>
        </div>

        @endif

        {!! Form::open(['url' => ['store-student'], 'method' => 'post']) !!}
            </div>
            <div class="form-group">
                {{ Form::label('lastname','Lastname') }}
                {{ Form::text('lastname',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('firstname','Firstname') }}
                {{ Form::text('firstname',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group">
                {{ Form::label('course','Course') }}
                {{ Form::text('course',null,['class'=>'input-group']) }}
            </div>
            <div class="form-group">
                {{ Form::label('year','Year') }}
                {{ Form::text('year',null,['class'=>'input-group']) }}
            </div>

            <div class="form-group text-center shadow-none">
                {!! Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-primary btn-block']) !!}

            </div>
        {!! Form::close() !!}

    </div>


@endsection
