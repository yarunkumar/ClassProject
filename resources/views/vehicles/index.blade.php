@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vehicle</h3>
    <p>
        <a href="{{ route('vehicles.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($vehicles) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Vehicle Number</th>
                    <th>VIN</th>
                    <th>Assigned</th>
                    
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @if(count($vehicles) > 0)
                    @foreach($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->vehicle_number }}</td>
                        <td>{{ $vehicle->vin }}</td>
                        <td>{{ $vehicle->station->station_name or '' }}</td>
                        
                            <td>
                                <a href="{{ route('vehicles.show',[$vehicle->id]) }}" class="btn btn-xs btn-primary">View</a>
                                <a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-info">Edit</a>
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
                @else
                    <tr>
                        <td colspan="4">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop