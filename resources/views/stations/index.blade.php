@extends('layouts.app')

@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="/home">Dashboard</a></li>
    <li class="active">Stations</li>
  </ol>
@endsection


@section('content')
    <!--<p>
        <a href="{{ route('stations.create') }}" class="btn btn-success">Add new</a>
    </p>-->

    <div class="panel panel-default" style="margin: 10px;">
        <div class="panel-heading">
            List
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($stations) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zipcode</th>
                    <th>Battalion</th>
                    <th>Related Document</th>
                    <th>Related Photo</th>
                    
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @if(count($stations) > 0)
                    @foreach($stations as $station)
                        <tr>
                        <td>{{ $station->station_name }}</td>
                        <td>{{ $station->station_number }}</td>
                        <td>{{ $station->station_date }}</td>
                        <td>{{ $station->address }}</td>
                        <td>{{ $station->city }}</td>
                        <td>{{ $station->zipcode }}</td>
                        <td>{{ $station->district }}</td>
                        <td><a href="{{ asset('uploads/'.$station->station_document) }}">Download file</a></td>
                        <td>@if($station->station_image!= '')<img src="{{ asset('uploads/thumb/'.$station->station_image) }}">@endif</td>
                        
                            <td>
                                <a href="{{ route('stations.show',[$station->id]) }}" class="btn btn-xs btn-primary">View</a>
                                <a href="{{ route('stations.edit',[$station->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['stations.destroy', $station->id])) !!}
{!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
{!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10">No entries in table</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop