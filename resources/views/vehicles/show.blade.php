@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('vehicles.index') }}">Units</a></li>
        <li class="active">Vehicle {{ $vehicle->vehicle_number }}</li>
    </ol>
@endsection

@section('content')

<div class="panel-body">
    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Assets</a>
            </li>
            <li><a href="#3b" data-toggle="tab">History</a>
            </li>
            <li><a href="#4a" data-toggle="tab">Other</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1b">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        Unit Information
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-striped datatable">
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
                                        </tr><tr><th>Status</th>
                                    <td>{{ $vehicle->status->status or '' }}</td>
                                        </tr><tr><th>Location</th>
                                            <td>{{$vehicle->station->station_name or '' }}{{ $vehicle->station->station_number or '' }}</td>
                                        </tr><tr><th>Grant</th>
                                    <td>{{ $vehicle->grant->grant_name or '' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                        </div>
                </div>
            </div>

            <div class="tab-pane" id="2b">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        Assets List
                    </div>
                    <div class="panel-body">
                        <table class="table table striped datatable">
                            <tr>
                                <th>Asset Name</th>
                                <th>Model</th>
                                <th>Make</th>
                                <th>Manufacturer</th>
                                <th>Serial Number</th>
                                <th>Date Purchased</th>
                                <th>Warranty Date</th>
                                <th>Cost</th>
                                <th>Comments</th>
                                <th>Status</th>
                                <th>Location</th>
                            </tr>
                            @foreach($vehicle->allassets as $all_asset)
                                <tr>
                                    <td>{{ $all_asset->name }}</td>
                                    <td>{{ $all_asset->model }}</td>
                                    <td>{{ $all_asset->make }}</td>
                                    <td>{{ $all_asset->manu }}</td>
                                    <td>{{ $all_asset->serial_number }}</td>
                                    <td>{{ $all_asset->date_purchased }}</td>
                                    <td>{{ $all_asset->warranty_date }}</td>
                                    <td>{{ $all_asset->cost }}</td>
                                    <td>{{ $all_asset->comments }}</td>
                                    <td>{{$all_asset->status->status or ''}}</td>
                                    <td>{{$all_asset->station->station_number or ''}}</td>
                                    {{--{{$all_asset->station->station_name or ''}}--}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        <div class="tab-pane" id="3b">
            <h4>History</h4>

        </div>
        <div class="tab-pane" id="4a">
            <h4>Others</h4>

        </div>
            <div class="panel-heading">
                <a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-info">Edit</a>
                <a href="{{ route('vehicles.index') }}" class="btn btn-xs btn-info">Back to list</a>
            </div>
        </div>

    </div>

</div >
@stop