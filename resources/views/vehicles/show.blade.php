@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vehicle</h3>
    
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