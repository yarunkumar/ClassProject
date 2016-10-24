@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Stations</li>
  </ol>
@endsection


@section('content')

    <div class="panel panel-default" style="margin: 10px;">
        <div class="panel-heading">
            Station List
        </div>
        <div class="panel-body">
            <table class="table table-striped {{ count($stations) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Zipcode</th>
                    <th>Battalion</th>
                    <th></th>
                    
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
                        
                            <td>
                                <a href="{{ route('stations.show',[$station->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{ route('stations.edit',[$station->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a type="button" data-toggle="modal" data-target="#{{ $station->station_number }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>
                        </tr>


                        <div class="modal fade" id="{{ $station->station_number }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                    'route' => ['stations.destroy', $station->id])) !!}
                                {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                {!! Form::close() !!}
                              </div>
                            </div>
                          </div>
                        </div>
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