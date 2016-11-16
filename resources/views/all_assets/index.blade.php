@extends('layouts.app')
@section('crumbs')
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}">Dashboard</a></li>
    <li class="active">Assets</li>
</ol>
@endsection

@section('content')

<div class="panel panel-default" hidden>

    <div class="panel-heading">
        Asset Listing
    </div>

    <div class="panel-body">

        <a id="toolbar" href="{{ route('all_assets.create') }}" class="btn" style="background-color: #2196f3; color: white;">New Asset</a>

        <table  data-toolbar="#toolbar"
        data-toggle="table"  
        data-search="true" 
        data-cookie="true"
        data-click-to-select="true"
        data-cookie-id-table="asset-index-v1.1-2"
        data-show-columns="true"
        id="table">
        <thead>
            <tr>
                <th data-sortable="true">Asset Type</th>
                <th data-sortable="true">Make</th>
                <th data-sortable="true">Model</th>
                <th data-sortable="true">Serial Number</th>
                <th data-sortable="true">Status</th>
                <th data-sortable="true">Location</th>
                <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            @if (count($all_assets) > 0)
            @foreach ($all_assets as $all_asset)
            <tr>
                <td>{{ $all_asset->asset_type }}</td>
                <td>{{ $all_asset->make }}</td>
                <td>{{ $all_asset->model }}</td>
                <td>{{ $all_asset->serial_number }}</td>
                <td>{{$all_asset->status->status or ''}}</td>

                <td>
                    @if ($all_asset->station_id )
                    {{$all_asset->station->station_name or ''}}
                        {{--{{$all_asset->station->station_number or ''}}--}}
                    @endif
                    @if ($all_asset->vehicle_id )
                    {{$all_asset->vehicle->unit_type or ''}}{{$all_asset->vehicle->vehicle_number or ''}}
                    @endif
                    {{--need to find out the business rule on assigning asset to station and vehicle--}}
                </td>

                <td>
                    <div style="float: right;">

                        <a href="{{ route('all_assets.show',[$all_asset->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{ route('all_assets.edit',[$all_asset->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button" data-toggle="modal" data-target="#{{ $all_asset->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>


                    </div>
                </td>
            </tr>

            <div class="modal fade" id="{{ $all_asset->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Warning</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want to delete asset {{ $all_asset->serial_number }}? This action cannot be undone.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {!! Form::open(array(
                        'style' => 'display: inline-block;',
                        'method' => 'DELETE',
                        'route' => ['all_assets.destroy', $all_asset->id])) !!}
                    {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>

            @endforeach
            @else
            <tr>
                <td colspan="47">No entries in table</td>
            </tr>
            @endif
        </tbody>
    </table>
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
    $(".panel").fadeIn("fast");

</script>

<script>
    window.route_mass_crud_entries_destroy = '{{ route('vehicles.mass_destroy') }}';
</script>

@endsection