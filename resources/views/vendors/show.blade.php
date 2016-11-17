@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('vendors.index') }}">Vendors</a></li>
    <li class="active">{{ $vendor->vendor_name }}</li>
  </ol>
@endsection

@section('content')

    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Assets</a>
            </li>
            
            </li>
            <li><a href="#4a" data-toggle="tab">Other</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1b">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        Vendor Information
                    </div>
                        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive table-no-bordered table-striped table-hover">
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
        </div>
            </div>
        </div>

        <div class="tab-pane" id="2b">
            <div class="panel panel-default" style="margin: 10px;">
                <div class="panel-heading">
                    Assets List
                </div>
                <div class="panel-body">

                                   
                    <table class="table table striped datatable">
                        <tr>
                            
                            <th>Asset Name</th>
                            <th>Asset Type</th>
                            <th>Make</th>
                            <th>Manufacturer</th>
                            <th>Serial Number</th>
                            <th>Date Purchased</th>
                            <th>Warranty Date</th>
                            <th>Cost</th>
                            <th>Comments</th>
                            <th>Status</th>
                            <th>Location</th>
                        </tr>
                        @foreach($vendor->allassets as $all_asset)
                            <tr>
                                
                                <td>{{ $all_asset->name }}</td>
                                <td>{{ $all_asset->asset_type }}</td>
                                <td>{{ $all_asset->make }}</td>
                                <td>{{ $all_asset->manu }}</td>
                                <td>{{ $all_asset->serial_number }}</td>
                                <td>{{ $all_asset->date_purchased }}</td>
                                <td>{{ $all_asset->warranty_date }}</td>
                                <td>{{ $all_asset->cost }}</td>
                                <td>{{ $all_asset->comments }}</td>
                                <td>{{$all_asset->status->status or ''}}</td>
                                <td>{{$all_asset->station->station_number or ''}}</td>
                                {{--{{$all_asset->station->station_name or ''}}--}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
        <div class="tab-pane" id="3b">

           
        </div>
        <div class="tab-pane" id="4a">
            <h4>Tab for Other</h4>
        </div>
    </div>
@stop