@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vendor</h3>

    <p>
        <a href="{{ route('vendors.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($vendors) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Vendor Name</th>
                        <th>Address</th>
                        <th>Website</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Tech Support Phone</th>
                        <th>Representative Name</th>
                        <th>Representative Phone</th>
                        <th>Representative Phone (Cell)</th>
                        <th>Represetative Email</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($vendors) > 0)
                        @foreach ($vendors as $vendor)
                            <tr data-entry-id="{{ $vendor->id }}">
                                <td></td>
                                <td>{{ $vendor->vendor_name }}</td>
                                <td>{{ $vendor->vendor_address }}</td>
                                <td>{{ $vendor->vendor_web }}</td>
                                <td>{{ $vendor->vendor_phone }}</td>
                                <td>{{ $vendor->vendor_fax }}</td>
                                <td>{{ $vendor->vendor_tech_sup }}</td>
                                <td>{{ $vendor->vendor_rep }}</td>
                                <td>{{ $vendor->vendor_rep_phone }}</td>
                                <td>{{ $vendor->vendor_rep_phone_m }}</td>
                                <td>{{ $vendor->vendor_email }}</td>
                                <td><a href="{{ route('vendors.show',[$vendor->id]) }}" class="btn btn-xs btn-primary">View</a><a href="{{ route('vendors.edit',[$vendor->id]) }}" class="btn btn-xs btn-info">Edit</a>{!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['vendors.destroy', $vendor->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('vendors.mass_destroy') }}';
    </script>
@endsection