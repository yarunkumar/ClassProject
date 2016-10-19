{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('netmotion_user_id', 'Netmotion User ID *', ['class' => 'control-label']) !!}
            {!! Form::text('netmotion_user_id', old('netmotion_user_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('netmotion_password', 'Netmotion Password', ['class' => 'control-label']) !!}
            {!! Form::text('netmotion_password', old('netmotion_password'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('ip_address', 'IP Address', ['class' => 'control-label']) !!}
            {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('cad_ip_address', 'CAD IP Address', ['class' => 'control-label']) !!}
            {!! Form::text('cad_ip_address', old('cad_ip_address'), ['class' => 'form-control']) !!}
        </div>
    </div>
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

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}