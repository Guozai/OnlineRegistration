@extends('layouts.default')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>错误信息：</strong> 您的输入有误。<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'registration.store','method'=>'POST')) !!}
    @include('registration.form')
    {!! Form::close() !!}
@endsection