@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Reminder</li>
  </ol>
@endsection

@section('content')    
    <div class="panel panel-default">
        <div class="panel-heading">
            Reminder Details
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Task</th>
                            <th>Note</th>
                        </tr>
                        <tr>
                            <td>{{ $todo->task }}</td>
                            <td>{{ $todo->notepad }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop