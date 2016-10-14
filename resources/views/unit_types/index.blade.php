@extends('layouts.app')

@section('content')
    <h3 class="page-title">Unit Type</h3>

    <p>
        <a href="{{ route('unit_types.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($unit_types) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Name</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($unit_types) > 0)
                        @foreach ($unit_types as $unit_type)
                            <tr data-entry-id="{{ $unit_type->id }}">
                                <td></td>
                                <td>{{ $unit_type->name }}</td>
                        
                                <td>
                                    <a href="{{ route('unit_types.show',[$unit_type->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('unit_types.edit',[$unit_type->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['unit_types.destroy', $unit_type->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
