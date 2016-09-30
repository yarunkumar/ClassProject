@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="/home">Dashboard</a></li>
    <li><a href="/stations">Stations</a></li>
    <li class="active">{{ $station->station_name }}</li>
  </ol>
@endsection


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Listed Vehicles
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table striped datatable">
                        <tr>
                            <th> Vehicle Number </th>
                            <th>Vin</th>
                            <th>Action</th>
                        </tr>
                    @foreach($station->vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->vehicle_number }}</td>
                            <td>{{ $vehicle->vin }}</td>
                            <td><a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-info">Edit</a>
                            {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['vehicles.destroy', $vehicle->id])) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop