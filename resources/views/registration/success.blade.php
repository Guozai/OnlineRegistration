@extends('layouts.default')
@section('title', '报名表格')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>提交成功</h2>
            </div>
        </div>
    </div>
    @if(!empty(Session::get('team_name')))
        <b>您提交的信息如下</b>
        <p></p>
        <p>队伍名称：{!! Session::get('team_name') !!}</p>
        <p>联系人姓名：{!! Session::get('registration')->contact_name !!}</p>
        <p>联系电话：{!! Session::get('registration')->contact_number !!}</p>
        <p>队员 ID：</p>
        <p>{!! Session::get('registration')->member1_id !!}</p>
        <p>{!! Session::get('registration')->member2_id !!}</p>
        <p>{!! Session::get('registration')->member3_id !!}</p>
        <p>{!! Session::get('registration')->member4_id !!}</p>
        <p>{!! Session::get('registration')->member5_id !!}</p>
        <p>{!! Session::get('registration')->member6_id !!}</p>
        <p>{!! Session::get('registration')->member7_id !!}</p>
    @endif
@endsection