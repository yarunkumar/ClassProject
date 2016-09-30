@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vehicle</h3>
    {!! Form::model($vehicle,['method' => 'PUT', 'route' => ['vehicles.update', $vehicle->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vehicle_number', 'Vehicle Number', ['class' => 'control-label']) !!}
                    {!! Form::text('vehicle_number', old('vehicle_number'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vehicle_number'))
                        <p class="help-block">
                            {{ $errors->first('vehicle_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vin', 'VIN', ['class' => 'control-label']) !!}
                    {!! Form::text('vin', old('vin'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vin'))
                        <p class="help-block">
                            {{ $errors->first('vin') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('station_id', 'Assigned', ['class' => 'control-label']) !!}
                    {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('station_id'))
                        <p class="help-block">
                            {{ $errors->first('station_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    
    <div>{!! Form::submit('Update',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    <a href="{{ route('vehicles.index') }}" class="btn btn-danger">Cancel</a>
</div>
@stop

