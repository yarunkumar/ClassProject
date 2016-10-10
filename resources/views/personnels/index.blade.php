@extends('layouts.app')

@section('content')
    <h3 class="page-title">Personnel</h3>

    <p>
        <a href="{{ route('personnels.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($personnels) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>OFD ID Number</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($personnels) > 0)
                        @foreach ($personnels as $personnel)
                            <tr>
                                <td>{{ $personnel->ofd_id }}</td>
                        <td>{{ $personnel->ofd_full_name }}</td>
                        <td>{{ $personnel->ofd_email }}</td>
                        <td>{{ $personnel->ofd_phone }}</td>
                        <td>{{ $personnel->ofd_role }}</td>
                        
                                <td>
                                    <a href="{{ route('personnels.show',[$personnel->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('personnels.edit',[$personnel->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['personnels.destroy', $personnel->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop