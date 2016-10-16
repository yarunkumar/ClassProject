{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('manufacture', 'Hotspot Manufacture', ['class' => 'control-label']) !!}
            {!! Form::text('manufacture', old('manufacture'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Hotstpot Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('mac_number', 'MAC #', ['class' => 'control-label']) !!}
            {!! Form::text('mac_number', old('mac_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model_imei_number', 'Model IMWI Number', ['class' => 'control-label']) !!}
            {!! Form::text('model_imei_number', old('model_imei_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('imei_number', 'IMEI Number', ['class' => 'control-label']) !!}
            {!! Form::text('imei_number', old('imei_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('firmware_version', 'Firmware Version', ['class' => 'control-label']) !!}
            {!! Form::text('firmware_version', old('firmware_version'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}