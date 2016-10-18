{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

<div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_id', 'MDC User ID', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_id', old('mdc_id'), ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_pass', 'MDC Password', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_pass', old('mdc_pass'), ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
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
    <div class="col-xs-6 form-group">
        {!! Form::label('manu', 'Unit Agency', ['class' => 'control-label']) !!}
        {!! Form::text('manu', old('manu'), ['class' => 'form-control']) !!}
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

</div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}