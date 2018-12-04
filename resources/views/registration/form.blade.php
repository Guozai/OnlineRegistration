<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>队伍名称:</strong>
            {!! Form::text('team_name', null, array('placeholder' => '队伍名称','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>联系人姓名:</strong>
            {!! Form::text('contact_name', null, array('placeholder' => '联系人姓名','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>联系电话:</strong>
            {!! Form::text('contact_number', null, array('placeholder' => '联系电话','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>队员 ID:</strong>
            {!! Form::text('member1_id', null, array('placeholder' => '队员1  ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member2_id', null, array('placeholder' => '队员2  ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member3_id', null, array('placeholder' => '队员3  ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member4_id', null, array('placeholder' => '队员4  ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member5_id', null, array('placeholder' => '队员5  ID','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member6_id', null, array('placeholder' => '队员6  ID （后备队员，选填）','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            {!! Form::text('member7_id', null, array('placeholder' => '队员7  ID （后备队员，选填）','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">提交</button>
    </div>
</div>