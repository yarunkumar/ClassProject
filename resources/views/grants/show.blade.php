    @extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('grants.index') }}">Grants</a></li>
    <li class="active">{{ $grant->grant_name }}</li>
  </ol>
@endsection

@section('content')
    
   <div class="panel-body">
    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Assets</a>
            </li>
            
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1b">
                <div class="panel panel-default" style="margin: 10px;">
                    <div class="panel-heading">
                        Grant Information
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Grant Name</th>
                    <td>{{ $grant->grant_name }}</td>
                        </tr><tr><th>Date Issued</th>
                    <td>{{ $grant->date_issued }}</td>
                        </tr><tr><th>Type</th>
                    <td>{{ $grant->grant_type }}</td>
                        </tr><tr><th>Date Matures</th>
                    <td>{{ $grant->date_matures }}</td>
                        </tr><tr><th>Grant Value</th>
                    <td>{{ $grant->grant_value }}</td>
                        </tr><tr><th>Comments</th>
                    <td>{{ $grant->grant_comments }}</td>
                        </tr>
                    </table>
                                </div>
                            </div>


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
                                <th>Model</th>
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
                            @foreach($grant->allassets as $all_asset)
                                <tr>
                                    <td>{{ $all_asset->name }}</td>
                                    <td>{{ $all_asset->model }}</td>
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
        
            <div class="panel-heading">
                <a href="{{ route('grants.edit',[$grant->id]) }}" class="btn btn-xs btn-info">Edit</a>
                <a href="{{ route('grants.index') }}" class="btn btn-xs btn-info">Back to list</a>
            </div>
        </div>

    </div>

</div >
@stop