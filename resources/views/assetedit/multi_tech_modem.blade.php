{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model', 'Model', ['class' => 'control-label']) !!}
            {!! Form::text('model', old('model'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('meid_model_number', 'MEID Model #', ['class' => 'control-label']) !!}
            {!! Form::text('meid_model_number', old('meid_model_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('meid_number', 'MEID Number', ['class' => 'control-label']) !!}
            {!! Form::text('meid_number', old('meid_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('phone_number', 'Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('multi_tech_sim', 'Multi-Tech SIM', ['class' => 'control-label']) !!}
            {!! Form::text('multi_tech_sim', old('multi_tech_sim'), ['class' => 'form-control']) !!}
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