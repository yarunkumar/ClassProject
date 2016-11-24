@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('stations.index') }}">Stations</a></li>
    <li class="active">Station {{ $station->station_number }}</li>
  </ol>
@endsection

@section('content')

{!! Form::model($station,['method' => 'PUT', 'route' => ['stations.reassign', $station->id], 'files' => true,]) !!}


    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Vehicles</a>
            </li>
            <li><a href="#3b" data-toggle="tab">Assets</a>
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

        <div class="tab-pane" id="3b">
            <div class="panel panel-default" style="margin: 10px;">
                <div class="panel-heading">
                    Assets List
                </div>
                <div class="panel-body">
                    <table class="table table striped datatable">
                        <tr>
                        <th></th>
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
                            <th>Actions</th>
                        </tr>
                        @foreach($station->allassets as $all_asset)
                            <tr>
                            <td><label><input type="checkbox" id="reassignids" name="reassignval[]" value="{{$all_asset->id}}" ></label></td>
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
                                <td>
                                    <a href="{{ route('all_assets.show',[$all_asset->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('all_assets.edit',[$all_asset->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="col-xs-6 form-group">
                    <div class="col-xs-6 form-group">
      {!! Form::label('station_id', 'Assign to Station', ['class' => 'control-label']) !!}
        {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!} </div><br/>
       <div> {!! Form::submit('Reassign',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}</div> 
        
       
    </div> 
                </div>
            </div>

        </div>
        <div class="tab-pane" id="2b">

            <div class="panel panel-default" style="margin: 10px;">
                <div class="panel-heading">
                    Vehicle List
                </div>
                <div class="panel-body">
                    <table class="table table striped datatable">
                        <tr>
                            <th>Vehicle Number </th>
                            <th>OFD VAN #</th>
                            <th>Action</th>
                        </tr>
                        @foreach($station->vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->vehicle_number }}</td>
                                <td>{{ $vehicle->van }}</td>
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
    </div>
    </div>
@stop