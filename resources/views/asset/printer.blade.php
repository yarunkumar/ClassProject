{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
            {!! Form::text('make', old('make'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('printer_name', 'Printer Name', ['class' => 'control-label']) !!}
            {!! Form::text('printer_name', old('printer_name'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('asset_tag_number', 'Asset Tag #', ['class' => 'control-label']) !!}
            {!! Form::text('asset_tag_number', old('asset_tag_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('owner', 'Owner', ['class' => 'control-label']) !!}
            {!! Form::text('owner', old('owner'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('location', 'Location', ['class' => 'control-label']) !!}
            {!! Form::text('location', old('location'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('ip_address', 'IP Address', ['class' => 'control-label']) !!}
            {!! Form::text('ip_address', old('ip_address'), ['class' => 'form-control']) !!}
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
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('drop_status', 'Drop Status', ['class' => 'control-label']) !!}
            {!! Form::text('drop_status', old('drop_status'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('switch_serial_number', 'Switch Serial #', ['class' => 'control-label']) !!}
            {!! Form::text('switch_serial_number', old('switch_serial_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('date_purchased', 'Date Purchased', ['class' => 'control-label']) !!}
            {!! Form::text('date_purchased', old('date_purchased'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('cost', 'Cost', ['class' => 'control-label']) !!}
            {!! Form::text('cost', old('cost'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}