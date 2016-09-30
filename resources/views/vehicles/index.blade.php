@extends('layouts.app')

@section('crumbs')
<ol class="breadcrumb">
    <li><a href="/home">Dashboard</a></li>
    <li class="active">Vehicles</li>
</ol>
@endsection

@section('content')
<!--<p>
<a href="{{ route('vehicles.create') }}" class="btn btn-success">Add new</a>
</p>-->

<div class="panel panel-default">
    <div class="panel-heading">
        Vehicles List
    </div>
    <div class="panel-body">
        <table class="table table-striped {{ count($vehicles) > 0 ? 'datatable' : '' }}">
            <thead>
                <tr>
                    <th>Vehicle Number</th>
                    <th>VIN</th>
                    <th>Assigned</th>

                    <th>Actions</th>
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
                        <a href="{{ route('vehicles.show',[$vehicle->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                        'route' => ['vehicles.destroy', $vehicle->id])) !!}
                        {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-xs btn-danger'))}}
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