{!! Form::model($all_assets,['method' => 'PUT', 'route' => ['all_assets.update', $all_assets->id], 'files' => true,]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_id', 'SIM Card ID', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_id', old('sim_card_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_phone_number', 'Sim Card Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_phone_number', old('sim_card_phone_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_ip', 'SIM Card IP', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_ip', old('sim_card_ip'), ['class' => 'form-control']) !!}
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