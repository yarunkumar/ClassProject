@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Service</li>
  </ol>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Trash Bin
        </div>

        <div class="panel-body">

            <table class="table table-bordered table-striped {{ count($relation) > 0 ? 'datatable' : '' }} ">
                <title>
                    Stations
                </title>
                <thead>
                <tr>
                    <th data-sortable="true">Station Name</th>
                    <th data-sortable="true">Number</th>
                    <th data-sortable="true">Date</th>
                    <th data-sortable="true">Address</th>
                    <th data-sortable="true">City</th>
                    <th data-sortable="true">Zipcode</th>
                    <th data-sortable="true">Battalion</th>
                    <th data-sortable="true">Deleted at</th>
                    <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>

                </tr>
                </thead>
                <tbody>
                @if (count($stations) > 0)
                    @foreach ($stations as $station)
                        <tr>
                            <td>{{ $station->station_name }}</td>
                            <td>{{ $station->station_number }}</td>
                            <td>{{ $station->station_date }}</td>
                            <td>{{ $station->address }}</td>
                            <td>{{ $station->city }}</td>
                            <td>{{ $station->zipcode }}</td>
                            <td>{{ $station->district }}</td>
                            <td>{{ $station->deleted_at }}</td>

                            <td>
                                <div style="float: right;">
                                    <a href="{{ route('trashes.edit',[$station->id])  }}"  class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a type="button" data-toggle="modal" data-target="#{{ $station->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="{{ $station->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete {{ $station->station_name }}? This action cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'route' => ['trashes.destroy', $station->id])) !!}
                                        {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">No entries in the table</td>
                    </tr>
                @endif
                </tbody>
            </table>

            <table class="table table-bordered table-striped {{ count($relation) > 0 ? 'datatable' : '' }} ">

                <thead>
                <tr>
                    {{--<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>--}}
                    <th data-sortable="true">OFD VAN #</th>
                    <th data-sortable="true">RIG #</th>
                    <th data-sortable="true">Make</th>
                    <th data-sortable="true">Model</th>
                    <th data-sortable="true">Year</th>
                    <th data-sortable="true">Type</th>
                    <th data-sortable="true">Status</th>
                    <th data-sortable="true">Location</th>
                    <th data-sortable="true">Grants</th>
                    <th data-sortable="true">Deleted at</th>
                    <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                @if (count($vehicles) > 0)
                    @foreach ($vehicles as $vehicle)
                        <tr data-entry-id="{{ $vehicle->id }}">
                            <td>{{ $vehicle->van }}</td>
                            <td>{{ $vehicle->vehicle_number }}</td>
                            <td>{{ $vehicle->make }}</td>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->year }}</td>
                            <td>{{ $vehicle->unittype->name or '' }}</td>
                            <td>{{ $vehicle->status->status or '' }}</td>
                            <td>{{ $vehicle->station->station_name or '' }}</td>
                            <td>{{ $vehicle->grant->grant_name or '' }}</td>
                            <td>{{ $vehicle->deleted_at or '' }}</td>
                            <td>
                                <div style="float: right;">
                                    <a href="{{ route('trashes.show',[$vehicle->id]) }}"  class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a type="button" data-toggle="modal" data-target="#{{ $vehicle->van }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="11">No entries in the table</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@stop

