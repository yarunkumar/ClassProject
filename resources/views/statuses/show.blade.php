@extends('layouts.app')

@section('content')
    <h3 class="page-title">Status</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Status</th>
                    <td>{{ $status->status }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('statuses.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop