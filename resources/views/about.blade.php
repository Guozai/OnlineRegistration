@extends('layouts.default')
@section('title', '关于我们')
@section('content')
    <strong>关于我们</strong>
    <br /><br />
    <div style="height:200px;">{!! nl2br($abouts[0]->description) !!}</div>
    <br /><br /><br /><br />
@endsection