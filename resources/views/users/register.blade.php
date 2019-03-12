@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" role="main">
                {!! Form::open(['url'=>'user/register']) !!}


                <div class="form-group">
                    {!! Form::label('password','Password:') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation','Password_confirmation:') !!}
                    {!! Form::password('password_confirmation',['class'=>'form-control']) !!}

                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop