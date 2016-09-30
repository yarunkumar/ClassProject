@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('vehicles.index') }}">Vehicles</a></li>
    <li class="active">{{ $vehicle->vehicle_number }}</li>
  </ol>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Vehicle Number</th>
                    <td>{{ $vehicle->vehicle_number }}</td>
                        </tr><tr><th>VIN</th>
                    <td>{{ $vehicle->vin }}</td>
                        </tr><tr><th>Assigned</th>
                    <td>{{ $vehicle->station->station_name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('vehicles.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop