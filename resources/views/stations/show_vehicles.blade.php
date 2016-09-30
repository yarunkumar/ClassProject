@extends('layouts.app')
@section('crumbs')
<ol class="breadcrumb">
    <li><a href="/home">Dashboard</a></li>
    <li><a href="/stations">Stations</a></li>
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
        <div class="tab-pane" id="2b">
            <h3>Tab for Assets</h3>
        </div>
        <div class="tab-pane" id="3b">
            <h3>Tab for Vehicles</h3>
        </div>
        <div class="tab-pane" id="4b">
            <h3>Tab for Other</h3>
        </div>
    </div>
</div>


@stop