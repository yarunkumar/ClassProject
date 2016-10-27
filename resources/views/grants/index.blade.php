@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Grants</li>
  </ol>
@endsection

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">

            {{--<a href="#" class="btn-danger">Delete All</a>--}}
            <a href="#" class="btn btn-success">Import</a>
            <div class="btn-group">
                <button type="button" class="btn btn-info">Export</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu" id="export-menu">
                    <li id="export-to-excel"><a href="{{URL::to('getExport')}}">Export to Excel</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Other</a> </li>
                </ul>
            </div>
            <p></p>
            <table class="table table-bordered table-striped {{ count($grants) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                    <th>Grant Name</th>
                    <th>Date Issued</th>
                    <th>Type</th>
                    <th>Date Matures</th>
                    <th>Grant Value</th>
                    <th>Comments</th>
                    
                    <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($grants) > 0)
                        @foreach ($grants as $grant)

                            <tr data-entry-id="{{ $grant->id }}">

                                <td>{{ $grant->grant_name }}</td>
                                <td>{{ $grant->date_issued }}</td>
                                <td>{{ $grant->grant_type }}</td>
                                <td>{{ $grant->date_matures }}</td>
                                <td>{{ $grant->grant_value }}</td>
                                <td>{{ $grant->grant_comments }}</td>
                        
                                <td>
                                    <a href="{{ route('grants.show',[$grant->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('grants.edit',[$grant->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a type="button" data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Warning</h4>
                              </div>
                              <div class="modal-body">
                                Are you sure you want to delete {{ $grant->grant_name }}? This action cannot be undone.
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    'route' => ['grants.destroy', $grant->id])) !!}
                                    {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                    {!! Form::close() !!}
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    <p style="margin-left:10px;">
        <a href="{{ route('grants.create') }}" class="btn btn-success">Add new</a>
    </p>
@stop

