@extends('layouts.backend.main')
@section('content')
    {!! Form::model($entity, ['route' => 'backend.admin.validUpdate', 'files' => true, 'method' => 'POST']) !!}
        @include('backend.admin._form')
    {!! Form::close() !!}
@endsection
