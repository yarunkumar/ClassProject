@extends('layouts.app')

@section('content')
    <h3 class="page-title">Grant</h3>

    <p>
        <a href="{{ route('grants.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($grants) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                    <th>Grant Name</th>
                    <th>Date Issued</th>
                    <th>Type</th>
                    <th>Date Matures</th>
                    <th>Grant Value</th>
                    <th>Comments</th>
                    
                        <th>&nbsp;</th>
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
                                    <a href="{{ route('grants.show',[$grant->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('grants.edit',[$grant->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['grants.destroy', $grant->id])) !!}
                                    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
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
@stop

