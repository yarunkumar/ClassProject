@extends('layouts.app')

@section('content')
    <h3 class="page-title">Grant</h3>
    
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