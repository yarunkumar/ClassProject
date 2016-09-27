@extends('layouts.app')

@section('content')
    <h3 class="page-title">Mobile Computer</h3>
    <p>
        <a href="{{ route('mobile_computers.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($mobile_computers) > 0 ? 'datatable' : '' }}">
                <thead>
                <tr>
                    <th>Model</th>
                    <th>Serial number</th>
                    <th>Name</th>
                    <th>Model IMEI #</th>
                    <th>IMEI #</th>
                    <th>Mobile Type</th>
                    <th>Date Purchased</th>
                    <th>Cost</th>
                    <th>Type</th>
                    
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @if(count($mobile_computers) > 0)
                    @foreach($mobile_computers as $mobile_computer)
                        <tr>
                            <td>{{ $mobile_computer->laptop_model }}</td>
                        <td>{{ $mobile_computer->laptop_serial }}</td>
                        <td>{{ $mobile_computer->laptop_name }}</td>
                        <td>{{ $mobile_computer->laptop_model_imei }}</td>
                        <td>{{ $mobile_computer->laptop_imei }}</td>
                        <td>{{ $mobile_computer->laptop_mobile_type }}</td>
                        <td>{{ $mobile_computer->laptop_date_purchased }}</td>
                        <td>{{ $mobile_computer->laptop_cost }}</td>
                        <td>{{ $mobile_computer->type->asst_type or '' }}</td>
                        
                            <td>
                                <a href="{{ route('mobile_computers.show',[$mobile_computer->id]) }}" class="btn btn-xs btn-primary">View</a>
                                <a href="{{ route('mobile_computers.edit',[$mobile_computer->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['mobile_computers.destroy', $mobile_computer->id])) !!}
{!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
{!! Form::close() !!}
                            </td>
                        </tr>
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