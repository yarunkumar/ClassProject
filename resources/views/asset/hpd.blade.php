{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
            {!! Form::text('make', old('make'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('hdp_warranty_date', 'HPD Warranty Date', ['class' => 'control-label']) !!}
            {!! Form::text('hdp_warranty_date', old('hdp_warranty_date'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('ip_address', 'IP Aaddress', ['class' => 'control-label']) !!}
            {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('firmware_verision', 'Firmware Verision', ['class' => 'control-label']) !!}
            {!! Form::text('firmware_verision', old('firmware_verision'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('radio_id', 'Radio ID', ['class' => 'control-label']) !!}
            {!! Form::text('radio_id', old('radio_id'), ['class' => 'form-control']) !!}
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