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
            In Repair List
        </div>

        <div class="panel-body">
            <table  data-toolbar="#toolbar"
                    data-toggle="table"
                    data-search="true"
                    data-cookie="true"
                    data-click-to-select="true"
                    data-cookie-id-table="vehicles-index-v1.1-1"
                    data-show-columns="true"
                    id="table">
                <thead>
                <tr>
                    {{--<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>--}}
                    <th data-sortable="true">OFD VAN #</th>
                    <th data-sortable="true">Vehicle #</th>
                    <th data-sortable="true">Make</th>
                    <th data-sortable="true">Model</th>
                    <th data-sortable="true">Year</th>
                    <th data-sortable="true">Type</th>
                    <th data-sortable="true">Status</th>
                    <th data-sortable="true">Location</th>
                    <th data-sortable="true">Grants</th>
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

                            <td>
                                <div style="float: right;">
                                    <a href="{{ route('vehicles.show',[$vehicle->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a type="button" data-toggle="modal" data-target="#{{ $vehicle->van }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>


                        <div class="modal fade" id="{{ $vehicle->van }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete vehicle with VAN #{{ $vehicle->van }}? This action cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'route' => ['vehicles.destroy', $vehicle->id])) !!}
                                        {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>


            <table  data-toolbar="#toolbar"
                    data-toggle="table"
                    data-search="true"
                    data-cookie="true"
                    data-click-to-select="true"
                    data-cookie-id-table="asset-index-v1.1-2"
                    data-show-columns="true"
                    id="table">
                <thead>
                <tr>
                    <th data-sortable="true">Asset Type</th>
                    <th data-sortable="true">Make</th>
                    <th data-sortable="true">Model</th>
                    <th data-sortable="true">Serial Number</th>
                    <th data-sortable="true">Status</th>
                    <th data-sortable="true">Location</th>
                    <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                @if (count($assets) > 0)
                    @foreach ($assets as $all_asset)
                        <tr>
                            <td>{{ $all_asset->asset_type }}</td>
                            <td>{{ $all_asset->make }}</td>
                            <td>{{ $all_asset->model }}</td>
                            <td>{{ $all_asset->serial_number }}</td>
                            <td>{{$all_asset->status->status or ''}}</td>

                            <td>
                                @if ($all_asset->station_id )
                                    {{$all_asset->station->station_name or ''}}
                                    {{--{{$all_asset->station->station_number or ''}}--}}
                                @endif
                                @if ($all_asset->vehicle_id )
                                    {{$all_asset->vehicle->unit_type or ''}}{{$all_asset->vehicle->vehicle_number or ''}}
                                @endif
                                {{--need to find out the business rule on assigning asset to station and vehicle--}}
                            </td>

                            <td>
                                <div style="float: right;">

                                    <a href="{{ route('all_assets.show',[$all_asset->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('all_assets.edit',[$all_asset->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a type="button" data-toggle="modal" data-target="#{{ $all_asset->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>


                                </div>
                            </td>
                        </tr>

                        <div class="modal fade" id="{{ $all_asset->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete asset {{ $all_asset->serial_number }}? This action cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {!! Form::open(array(
                                            'style' => 'display: inline-block;',
                                            'method' => 'DELETE',
                                            'route' => ['all_assets.destroy', $all_asset->id])) !!}
                                        {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @else
                    <tr>
                        <td colspan="47">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@stop

