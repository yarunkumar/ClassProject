@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('grants.index') }}">Grants</a></li>
    <li class="active">{{ $grant->grant_name }}</li>
  </ol>
@endsection

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Grant Name</th>
                    <td>{{ $grant->grant_name }}</td>
                        </tr><tr><th>Date Issued</th>
                    <td>{{ $grant->date_issued }}</td>
                        </tr><tr><th>Type</th>
                    <td>{{ $grant->grant_type }}</td>
                        </tr><tr><th>Date Matures</th>
                    <td>{{ $grant->date_matures }}</td>
                        </tr><tr><th>Grant Value</th>
                    <td>{{ $grant->grant_value }}</td>
                        </tr><tr><th>Comments</th>
                    <td>{{ $grant->grant_comments }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('grants.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop