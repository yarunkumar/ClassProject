@extends('layouts.app')
@section('crumbs')
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li><a href="{{ route('grants.index') }}">Grants</a></li>
    <li class="active">{{ $grant->grant_name }}</li>
</ol>
@endsection

@section('content')


<div class="tab-contanier">
    <ul class="nav nav-pills">
        <li class="active">
            <a href="#1a" data-toggle="tab">Overview</a>
        </li>
        <li><a href="#2a" data-toggle="tab">Assets</a></li>
    </ul>

    <div class="tab-content clearfix shadow-soft">
        <div class="tab-pane active" id="1a">
            <table class="table table-responsive table-no-bordered table-striped table-hover">
                <tr>
                    <th>Grant Name</th>
                    <td>{{ $grant->grant_name }}</td>
                </tr>
                <tr>
                    <th>Date Issued</th>
                    <td>{{ $grant->date_issued }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ $grant->grant_type }}</td>
                </tr>
                <tr>
                    <th>Date Matures</th>
                    <td>{{ $grant->date_matures }}</td>
                </tr>
                <tr>
                    <th>Grant Value</th>
                    <td>{{ $grant->grant_value }}</td>
                </tr>
                <tr>
                    <th>Comments</th>
                    <td>{{ $grant->grant_comments }}</td>
                </tr>
            </table>
        </div>
        <div class="tab-pane" id="2a">
            <table

                    data-toggle="table"  
                    data-search="true" 
                    data-cookie="true"
                    data-click-to-select="true"
                    data-cookie-id-table="grant-asset-v1.1"
                    data-show-columns="true"
                    id="table">
            <thead>
                <tr>
                    <th data-sortable="true">Asset Name</th>
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
            </thead>
            <tbody>
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

    $('#table').bootstrapTable({
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