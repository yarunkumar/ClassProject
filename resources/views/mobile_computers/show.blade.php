@extends('layouts.app')

@section('content')
    <h3 class="page-title">Mobile Computer</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Model</th>
                    <td>{{ $mobile_computer->laptop_model }}</td>
                        </tr><tr><th>Serial number</th>
                    <td>{{ $mobile_computer->laptop_serial }}</td>
                        </tr><tr><th>Name</th>
                    <td>{{ $mobile_computer->laptop_name }}</td>
                        </tr><tr><th>Model IMEI #</th>
                    <td>{{ $mobile_computer->laptop_model_imei }}</td>
                        </tr><tr><th>IMEI #</th>
                    <td>{{ $mobile_computer->laptop_imei }}</td>
                        </tr><tr><th>Mobile Type</th>
                    <td>{{ $mobile_computer->laptop_mobile_type }}</td>
                        </tr><tr><th>Date Purchased</th>
                    <td>{{ $mobile_computer->laptop_date_purchased }}</td>
                        </tr><tr><th>Cost</th>
                    <td>{{ $mobile_computer->laptop_cost }}</td>
                        </tr><tr><th>Type</th>
                    <td>{{ $mobile_computer->type->asst_type or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('mobile_computers.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop