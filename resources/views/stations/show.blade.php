@extends('layouts.app')

@section('content')
    <h3 class="page-title">Station</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Name</th>
                    <td>{{ $station->station_name }}</td>
                        </tr><tr><th>Number</th>
                    <td>{{ $station->station_number }}</td>
                        </tr><tr><th>Date</th>
                    <td>{{ $station->station_date }}</td>
                        </tr><tr><th>Address</th>
                    <td>{{ $station->address }}</td>
                        </tr><tr><th>City</th>
                    <td>{{ $station->city }}</td>
                        </tr><tr><th>Zipcode</th>
                    <td>{{ $station->zipcode }}</td>
                        </tr><tr><th>District</th>
                    <td>{{ $station->district }}</td>
                        </tr><tr><th>Related Document</th>
                    <td><a href="{{ asset('uploads/'.$station->station_document) }}">Download file</a></td>
                        </tr><tr><th>Related Photo</th>
                    <td>@if($station->station_image!= '')<img src="{{ asset('uploads/thumb/'.$station->station_image) }}">@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('stations.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop