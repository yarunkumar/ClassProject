@extends('layouts.app')
@section('crumbs')
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('stations.index') }}">Stations</a></li>
    <li class="active">Station {{ $station->station_number }}</li>
  </ol>
@endsection

@section('content')

{!! Form::model($station,['method' => 'PUT', 'route' => ['stations.reassign', $station->id], 'files' => true,]) !!}


    <div id="exTab3" class="pill-container">
        <ul  class="nav nav-pills">
            <li class="active">
                <a href="#1b" data-toggle="tab">Overview</a>
            </li>
            <li>
                <a href="#2b" data-toggle="tab">Vehicles</a>
            </li>
            <li>
                <a href="#3b" data-toggle="tab">Assets</a>
            </li>
        </ul>

        <div class="tab-content clearfix" style="padding: 15px;">
            <div class="tab-pane active" id="1b">

                <table class="table table-striped datatable">
                    <tr>
                        <th>Name</th>
                        <td>{{ $station->station_name }}</td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td>{{ $station->station_number }}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>{{ $station->station_date }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $station->address }}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{ $station->city }}</td>
                    </tr>
                    <tr>
                        <th>Zipcode</th>
                        <td>{{ $station->zipcode }}</td>
                    </tr>
                    <tr>
                        <th>Battalion</th>
                        <td>{{ $station->district }}</td>
                    </tr>
                    <tr>
                        <th>Related Document</th>
                        <td><a href="{{ asset('uploads/'.$station->station_document) }}">Download file</a></td>
                    </tr>
                    <tr>
                        <th>Related Photo</th>
                        <td>@if($station->station_image!= '')<img src="{{ asset('uploads/thumb/'.$station->station_image) }}">@endif</td>
                    </tr>
                </table>
        </div>

        <div class="tab-pane" id="3b">
<<<<<<< HEAD
                <table  data-toolbar="#toolbar"
                        data-toggle="table"  
                        data-search="true" 
                        data-cookie="true"
                        data-click-to-select="true"
                        data-cookie-id-table="station-assets-v1.1-1"
                        data-show-columns="true"
                        id="table-station-assets">
                    <thead>
                    <tr>
                        <th data-sortable="true">Asset Type</th>
                        <th data-sortable="true">Asset Name</th>
                        <th data-sortable="true">Model</th>
                        <th data-sortable="true">Make</th>
                        <th data-sortable="true">Manufacturer</th>
                        <th data-sortable="true">Serial Number</th>
                        <th data-sortable="true">Date Purchased</th>
                        <th data-sortable="true">Warranty Date</th>
                        <th data-sortable="true">Cost</th>
                        <th data-sortable="true">Comments</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Location</th>
                        <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($station->allassets as $all_asset)
                            <tr>
                                <td>{{ $all_asset->asset_type }}</td>
=======
            <div class="panel panel-default" style="margin: 10px;">
                <div class="panel-heading">
                    Assets List
                </div>
                <div class="panel-body">
                    <table class="table table striped datatable">
                        <tr>
                        <th></th>
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
                            <th>Actions</th>
                        </tr>
                        @foreach($station->allassets as $all_asset)
                            <tr>
                            <td><label><input type="checkbox" id="reassignids" name="reassignval[]" value="{{$all_asset->id}}" ></label></td>
>>>>>>> 47a957e66d04bc04d00a11aaaef5a8ace8abfedc
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
                                <td>
                                    <div style="float: right;">
                                        <a href="{{ route('all_assets.show',[$all_asset->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('all_assets.edit',[$all_asset->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
<<<<<<< HEAD
=======
                    <div class="col-xs-6 form-group">
                    <div class="col-xs-6 form-group">
      {!! Form::label('station_id', 'Assign to Station', ['class' => 'control-label']) !!}
        {!! Form::select('station_id', $stations, old('station_id'), ['class' => 'form-control']) !!} </div><br/>
       <div> {!! Form::submit('Reassign',['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}</div> 
        
       
    </div> 
                </div>
            </div>
>>>>>>> 47a957e66d04bc04d00a11aaaef5a8ace8abfedc

        </div>
        <div class="tab-pane" id="2b">
                <table  data-toolbar="#toolbar"
                        data-toggle="table"  
                        data-search="true" 
                        data-cookie="true"
                        data-click-to-select="true"
                        data-cookie-id-table="station-vehicles-v1.1-1"
                        data-show-columns="true"
                        id="table-station-vehicles">
                    <thead>
                    <tr>
                        <th data-sortable="true">Vehicle Number</th>
                        <th data-sortable="true">OFD VAN Number</th>
                        <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($station->vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->vehicle_number }}</td>
                                <td>{{ $vehicle->van }}</td>
                                <td>
                                    <div style="float: right;">
                                        <a href="{{ route('vehicles.show',[$vehicle->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('vehicles.edit',[$vehicle->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

            </div>
        </div>
    </div>

@stop

@section('javascript')

<script src="{{ url('js/extensions/cookie') }}/bootstrap-table-cookie.js"></script>
<script src="{{ url('js/extensions/mobile') }}/bootstrap-table-mobile.js"></script>

<script src="{{ url('js/export') }}/bootstrap-table-export.js"></script>
<script src="{{ url('js/export') }}/tableExport.js"></script>
<script src="{{ url('js/export') }}/jquery.base64.js"></script>

<script type="text/javascript">

    $('#table-station-assets').bootstrapTable({
        classes: 'table table-responsive table-no-bordered table-striped table-hover',
        iconsPrefix: 'fa',
        cookie: true,
        cookieExpire: '2y',
        mobileResponsive: true,
        sortable: true,
        showExport: true,
        showColumns: true,
        exportTypes: ['csv', 'excel'],
        pageList: ['10','25','50','100','150','200','500','1000'],
        exportOptions: {
            fileName: 'assets-export-' + (new Date()).toISOString().slice(0,10),
        },
        icons: {
            paginationSwitchDown: 'fa-caret-square-o-down',
            paginationSwitchUp: 'fa-caret-square-o-up',
            sort: 'fa fa-sort-amount-desc',
            plus: 'fa fa-plus',
            minus: 'fa fa-minus',
            columns: 'fa-columns',
            refresh: 'fa-refresh'
        },
    });

    $('#table-station-vehicles').bootstrapTable({
        classes: 'table table-responsive table-no-bordered table-striped table-hover',
        iconsPrefix: 'fa',
        cookie: true,
        cookieExpire: '2y',
        mobileResponsive: true,
        sortable: true,
        showExport: true,
        showColumns: true,
        exportTypes: ['csv', 'excel'],
        pageList: ['10','25','50','100','150','200','500','1000'],
        exportOptions: {
            fileName: 'assets-export-' + (new Date()).toISOString().slice(0,10),
        },
        icons: {
            paginationSwitchDown: 'fa-caret-square-o-down',
            paginationSwitchUp: 'fa-caret-square-o-up',
            sort: 'fa fa-sort-amount-desc',
            plus: 'fa fa-plus',
            minus: 'fa fa-minus',
            columns: 'fa-columns',
            refresh: 'fa-refresh'
        },
    });

</script>

@endsection