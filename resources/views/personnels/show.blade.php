@extends('layouts.app')

@section('content')
    <h3 class="page-title">Personnel</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>OFD ID Number</th>
                    <td>{{ $personnel->ofd_id }}</td>
                        </tr><tr><th>Full Name</th>
                    <td>{{ $personnel->ofd_full_name }}</td>
                        </tr><tr><th>Email</th>
                    <td>{{ $personnel->ofd_email }}</td>
                        </tr><tr><th>Phone</th>
                    <td>{{ $personnel->ofd_phone }}</td>
                        </tr><tr><th>Role</th>
                    <td>{{ $personnel->ofd_role }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('personnels.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop