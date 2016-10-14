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
                        <tr><th>OFD VAN #</th>
                    <td>{{ $vehicle->van }}</td>
                        </tr><tr><th>Make</th>
                    <td>{{ $vehicle->make }}</td>
                        </tr><tr><th>Model</th>
                    <td>{{ $vehicle->model }}</td>
                        </tr><tr><th>Year</th>
                    <td>{{ $vehicle->year }}</td>
                        </tr><tr><th>Type</th>
                    <td>{{ $vehicle->unittype->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('vehicles.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop