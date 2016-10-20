{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

   <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('tmv_num', 'Team Viewer Number', ['class' => 'control-label']) !!}
            {!! Form::text('tmv_num', old('tmv_num'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('tmv_alias', 'Teamviewer Alias', ['class' => 'control-label']) !!}
            {!! Form::text('tmv_alias', old('tmv_alias  '), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('ntm_uid', 'Username', ['class' => 'control-label']) !!}
            {!! Form::text('ntm_uid', old('ntm_uid'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('ntm_pass', 'Password', ['class' => 'control-label']) !!}
            {!! Form::text('ntm_pass', old('ntm_pass'), ['class' => 'form-control']) !!}
        </div>
    </div>
 <div class="row">
        <div class="col-xs-6 form-group">
        {!! Form::label('station_id', 'Assign to Station', ['class' => 'control-label']) !!}
        {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!}
        <p class="help-block"></p>
        @if($errors->has('station_id'))
            <p class="help-block">
                {{ $errors->first('station_id') }}
            </p>
        @endif
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('vehicle_id', 'Assign to a vehicle', ['class' => 'control-label']) !!}
        {!! Form::select('vehicle_id', $vehicles, old('vehicle_id'), ['class' => 'form-control']) !!}
        <p class="help-block"></p>
        @if($errors->has('vehicle_id'))
            <p class="help-block">
                {{ $errors->first('vehicle_id') }}
            </p>
        @endif
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 form-group">
            {!! Form::label('asset_type', 'Asset Type', ['class' => 'control-label']) !!}
            {!! Form::text('asset_type', old('asset_type'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
            {!! Form::text('comments', old('comments'), ['class' => 'form-control']) !!}
        </div>
        
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}