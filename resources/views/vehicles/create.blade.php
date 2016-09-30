@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('stations.index') }}">Vehicles</a></li>
    <li class="active">Create</li>
  </ol>
@endsection

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create New Vehicle
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
                    {!! Form::label('station_id', 'Assign to', ['class' => 'control-label']) !!}
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
            <a href="{{ route('vehicles.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </div>



@stop

