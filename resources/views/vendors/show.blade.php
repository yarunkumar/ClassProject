@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vendor</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>Vendor Name</th>
                    <td>{{ $vendor->vendor_name }}</td></tr><tr><th>Address</th>
                    <td>{{ $vendor->vendor_address }}</td></tr><tr><th>Website</th>
                    <td>{{ $vendor->vendor_web }}</td></tr><tr><th>Phone</th>
                    <td>{{ $vendor->vendor_phone }}</td></tr><tr><th>Fax</th>
                    <td>{{ $vendor->vendor_fax }}</td></tr><tr><th>Tech Support Phone</th>
                    <td>{{ $vendor->vendor_tech_sup }}</td></tr><tr><th>Representative Name</th>
                    <td>{{ $vendor->vendor_rep }}</td></tr><tr><th>Representative Phone</th>
                    <td>{{ $vendor->vendor_rep_phone }}</td></tr><tr><th>Representative Phone (Cell)</th>
                    <td>{{ $vendor->vendor_rep_phone_m }}</td></tr><tr><th>Represetative Email</th>
                    <td>{{ $vendor->vendor_email }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('vendors.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop