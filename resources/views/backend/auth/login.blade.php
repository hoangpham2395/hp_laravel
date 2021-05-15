@extends('layouts.backend.main_auth')
@section('content')
    <h4 class="text-dark mb-5">{{getAction('sign_in')}}</h4>

    {!! Form::open(['route' => 'backend.login', 'method' => 'POST']) !!}
        <div class="row">
            <div class="form-group col-md-12 mb-4">
                {!! Form::email('email', '', ['class' => 'form-control input-lg', 'id' => 'email', 'aria-describedby' => 'emailHelp', 'placeholder' => trans('model.admins.email')]) !!}
            </div>

            <div class="form-group col-md-12 ">
                {!! Form::password('password', ['class' => 'form-control input-lg', 'id' => 'password', 'placeholder' => trans('model.admins.password')]) !!}
            </div>

            <div class="col-md-12">
                <div class="d-flex my-2 justify-content-between">
                    <div class="d-inline-block mr-3">
                        <label class="control control-checkbox">{{getAction('remember_me')}}
                            {!! Form::checkbox('remember', 1) !!}
                            <div class="control-indicator"></div>
                        </label>
                    </div>
                    <p><a class="text-blue" href="#">{{getMessage('forgot_password')}}</a></p>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">{{getAction('sign_in')}}</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
