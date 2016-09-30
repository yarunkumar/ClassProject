@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('stations.index') }}">Station</a></li>
    <li class="active">{{ $station->station_name }}</li>
  </ol>
@endsection

@section('content')

    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Assets</a>
            </li>
            <li><a href="#3b" data-toggle="tab">Vehicles</a>
            </li>
            <li><a href="#4a" data-toggle="tab">Other</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1b">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        Station Information
                    </div>
                        <div class="panel-body">
                            <table class="table table-striped datatable">
                                <tr><th>Name</th>
                            <td>{{ $station->station_name }}</td>
                                </tr><tr><th>Number</th>
                            <td>{{ $station->station_number }}</td>
                                </tr><tr><th>Date</th>
                            <td>{{ $station->station_date }}</td>
                                </tr><tr><th>Address</th>
                            <td>{{ $station->address }}</td>
                                </tr><tr><th>City</th>
                            <td>{{ $station->city }}</td>
                                </tr><tr><th>Zipcode</th>
                            <td>{{ $station->zipcode }}</td>
                                </tr><tr><th>Battalion</th>
                            <td>{{ $station->district }}</td>
                                </tr><tr><th>Related Document</th>
                            <td><a href="{{ asset('uploads/'.$station->station_document) }}">Download file</a></td>
                                </tr><tr><th>Related Photo</th>
                            <td>@if($station->station_image!= '')<img src="{{ asset('uploads/thumb/'.$station->station_image) }}">@endif</td>
                                </tr>
                            </table>
                        </div>

            </div>
        </div>

        <div class="tab-pane" id="2b">
            <h4>Tab for Assets</h4>

        </div>
        <div class="tab-pane" id="3b">

            <div class="panel panel-default" style="margin: 10px;">
                <div class="panel-heading">
                    Vehicle List
                </div>
                <div class="panel-body">
                    <table class="table table striped datatable">
                        <tr>
                            <th>Vehicle Number </th>
                            <th>Vin</th>
                            <th>Action</th>
                        </tr>
                        @foreach($station->vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->vehicle_number }}</td>
                                <td>{{ $vehicle->vin }}</td>
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
                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="4a">
            <h4>Tab for Other</h4>
        </div>
    </div>
@stop