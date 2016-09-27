@extends('layouts.app')

@section('content')
    <h3 class="page-title">Type</h3>
    <p>
        <a href="{{ route('types.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($types) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Asset Type</th>
                    
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @if(count($types) > 0)
                    @foreach($types as $type)
                        <tr>
                            <td>{{ $type->asst_type }}</td>
                        
                            <td>
                                <a href="{{ route('types.show',[$type->id]) }}" class="btn btn-xs btn-primary">View</a>
                                <a href="{{ route('types.edit',[$type->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['types.destroy', $type->id])) !!}
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