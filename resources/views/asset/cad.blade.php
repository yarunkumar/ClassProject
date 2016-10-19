{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

<div class="row">
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_user_id', 'MDC User ID', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_user_id', old('mdc_user_id'), ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6 form-group">
        {!! Form::label('mdc_password', 'MDC Password', ['class' => 'control-label']) !!}
        {!! Form::text('mdc_password', old('mdc_password'), ['class' => 'form-control']) !!}
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
        {!! Form::label('unit_agency', 'Unit Agency', ['class' => 'control-label']) !!}
        {!! Form::text('unit_agency', old('unit_agency'), ['class' => 'form-control']) !!}
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