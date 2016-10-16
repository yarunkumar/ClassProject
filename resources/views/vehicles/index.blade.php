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
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>OFD VAN #</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Grants</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($vehicles) > 0)
                        @foreach ($vehicles as $vehicle)
                            <tr data-entry-id="{{ $vehicle->id }}">
                                <td></td>
                                <td>{{ $vehicle->van }}</td>
                        <td>{{ $vehicle->make }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year }}</td>
                        <td>{{ $vehicle->unittype->name or '' }}</td>
                        <td>{{ $vehicle->status->status or '' }}</td>
                        <td>{{$vehicle->station->station_name or '' }}{{ $vehicle->station->station_number or '' }}</td>
                        <td>{{ $vehicle->grant->grant_name or '' }}</td>
                        
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
                            <td colspan="6">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('vehicles.mass_destroy') }}';
    </script>
@endsection