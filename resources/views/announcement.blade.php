@extends('layouts.default')
@section('title', '赛事说明')
@section('content')
    <strong>赛事说明</strong>
    <br /><br />
    <div style="overflow-y:scroll;height:200px;">{!! nl2br($announcements[0]->content) !!}</div>
    <br /><br /><br /><br />
@endsection