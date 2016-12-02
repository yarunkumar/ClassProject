@extends('layouts.app')
@section('crumbs')
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Dashboard</a></li>
        <li><a href="{{ route('all_assets.index') }}">Assets</a></li>
        <li class="active">{{ $allasset->asset_type }}</li>
    </ol>
@endsection

@section('content')


                            


        <div id="exTab3" class="pill-container">
            <ul  class="nav nav-pills">
                <li class="active">
                    <a href="#1b" data-toggle="tab">Overview</a>
                </li>
                <li><a href="#3b" data-toggle="tab">History</a>
                </li>
                <li><a href="#4a" data-toggle="tab">Files</a>
                </li>
            </ul>
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1b">
                        <table class="table table-striped datatable">

                                @if ($allasset->name )
                                    <tr>
                                        <td>{{ ('Asset Name') }}</td>
                                        <td>{{ $allasset->name }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->model )
                                    <tr>
                                        <td>{{ ('Model') }}</td>
                                        <td>{{ $allasset->model }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->make )
                                    <tr>
                                        <td>{{ ('Make') }}</td>
                                        <td>{{ $allasset->make }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->manu )
                                    <tr>
                                        <td>{{ ('Manufacturer') }}</td>
                                        <td>{{ $allasset->manu }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->serial_number )
                                    <tr>
                                        <td>{{ ('Serial Number') }}</td>
                                        <td>{{ $allasset->serial_number }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->model_imei )
                                    <tr>
                                        <td>{{ ('Model IMEI Number') }}</td>
                                        <td>{{ $allasset->model_imei }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->date_purchased )
                                    <tr>
                                        <td>{{ ('Date Purchased') }}</td>
                                        <td>{{ $allasset->date_purchased }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->warranty_date )
                                    <tr>
                                        <td>{{ ('Warranty Date') }}</td>
                                        <td>{{ $allasset->warranty_date }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->cost )
                                    <tr>
                                        <td>{{ ('Cost') }}</td>
                                        <td>{{ $allasset->cost }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->imei )
                                    <tr>
                                        <td>{{ ('IMEI Number') }}</td>
                                        <td>{{ $allasset->imei }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mobile_type )
                                    <tr>
                                        <td>{{ ('Mobile Type') }}</td>
                                        <td>{{ $allasset->mobile_type }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->os )
                                    <tr>
                                        <td>{{ ('Operating System') }}</td>
                                        <td>{{ $allasset->os }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->comments )
                                    <tr>
                                        <td>{{ ('Comments') }}</td>
                                        <td>{{ $allasset->comments }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->ntm_uid )
                                    <tr>
                                        <td>{{ ('Netmotion User ID') }}</td>
                                        <td>{{ $allasset->ntm_uid }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->ntm_pass )
                                    <tr>
                                        <td>{{ ('Netmotion Password') }}</td>
                                        <td>{{ $allasset->ntm_pass }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->ip_address )
                                    <tr>
                                        <td>{{ ('IP address') }}</td>
                                        <td>{{ $allasset->ip_address }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mac )
                                    <tr>
                                        <td>{{ ('MAC Address') }}</td>
                                        <td>{{ $allasset->mac }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->cad_ip )
                                    <tr>
                                        <td>{{ ('CAD IP') }}</td>
                                        <td>{{ $allasset->cad_ip }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->sim_id )
                                    <tr>
                                        <td>{{ ('SIM Card IP') }}</td>
                                        <td>{{ $allasset->sim_id }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->sim_phone )
                                    <tr>
                                        <td>{{ ('Sim Card Phone #') }}</td>
                                        <td>{{ $allasset->sim_phone }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->gps_protocol )
                                    <tr>
                                        <td>{{ ('GPS Protocol') }}</td>
                                        <td>{{ $allasset->gps_protocol }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->firmware_ver )
                                    <tr>
                                        <td>{{ ('Firmware Version') }}</td>
                                        <td>{{ $allasset->firmware_ver }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->radio_id )
                                    <tr>
                                        <td>{{ ('Radio ID') }}</td>
                                        <td>{{ $allasset->radio_id }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->meid_model_num )
                                    <tr>
                                        <td>{{ ('MEID model #') }}</td>
                                        <td>{{ $allasset->meid_model_num }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->meid )
                                    <tr>
                                        <td>{{ ('MEID') }}</td>
                                        <td>{{ $allasset->meid }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->phone )
                                    <tr>
                                        <td>{{ ('Phone Number') }}</td>
                                        <td>{{ $allasset->phone }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->multi_tech_sim )
                                    <tr>
                                        <td>{{ ('Multi Tech SIM #') }}</td>
                                        <td>{{ $allasset->multi_tech_sim }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mdc_id )
                                    <tr>
                                        <td>{{ ('MDC User ID') }}</td>
                                        <td>{{ $allasset->mdc_id }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mdc_pass )
                                    <tr>
                                        <td>{{ ('MDC Password') }}</td>
                                        <td>{{ $allasset->mdc_pass }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->cpu )
                                    <tr>
                                        <td>{{ ('CPU') }}</td>
                                        <td>{{ $allasset->cpu }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mdc_id )
                                    <tr>
                                        <td>{{ ('MDC User ID') }}</td>
                                        <td>{{ $allasset->mdc_id }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->mdc_pass )
                                    <tr>
                                        <td>{{ ('MDC Password') }}</td>
                                        <td>{{ $allasset->mdc_pass }}</td>
                                    </tr>
                                @endif
                                {{--@if ($allasset->cpu )--}}
                                    {{--<tr>--}}
                                        {{--<td>{{ ('CPU') }}</td>--}}
                                        {{--<td>{{ $allasset->cpu }}</td>--}}
                                    {{--</tr>--}}
                                {{--@endif--}}
                                @if ($allasset->ram )
                                    <tr>
                                        <td>{{ ('Ram') }}</td>
                                        <td>{{ $allasset->ram }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->asset_tag )
                                    <tr>
                                        <td>{{ ('Asset Tag #') }}</td>
                                        <td>{{ $allasset->asset_tag }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->network_status )
                                    <tr>
                                        <td>{{ ('Networked') }}</td>
                                        <td>{{ $allasset->network_status == 1 ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->drop_status )
                                    <tr>
                                        <td>{{ ('Drop Status') }}</td>
                                        <td>{{ $allasset->drop_status }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->switch_serial )
                                    <tr>
                                        <td>{{ ('Switch Serial Number') }}</td>
                                        <td>{{ $allasset->switch_serial }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->screen_size )
                                    <tr>
                                        <td>{{ ('Screen Size') }}</td>
                                        <td>{{ $allasset->screen_size }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->ac_adapter )
                                    <tr>
                                        <td>{{ ('A/C Adapter') }}</td>
                                        <td>{{ $allasset->ac_adapter }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->stylus )
                                    <tr>
                                        <td>{{ ('Stylus') }}</td>
                                        <td>{{ $allasset->stylus }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->seid_num )
                                    <tr>
                                        <td>{{ ('SEID Number') }}</td>
                                        <td>{{ $allasset->seid_num }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->emid )
                                    <tr>
                                        <td>{{ ('EMID') }}</td>
                                        <td>{{ $allasset->emid }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->tmv_num )
                                    <tr>
                                        <td>{{ ('TeamViewer Number') }}</td>
                                        <td>{{ $allasset->tmv_num }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->tmv_alias )
                                    <tr>
                                        <td>{{ ('Teamviewer alias') }}</td>
                                        <td>{{ $allasset->tmv_alias }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->radio_desc )
                                    <tr>
                                        <td>{{ ('Model Description') }}</td>
                                        <td>{{ $allasset->radio_desc }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->tier_level )
                                    <tr>
                                        <td>{{ ('Tier level') }}</td>
                                        <td>{{ $allasset->tier_level }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->system_alias )
                                    <tr>
                                        <td>{{ ('System alias') }}</td>
                                        <td>{{ $allasset->system_alias }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->system_id )
                                    <tr>
                                        <td>{{ ('System ID Num') }}</td>
                                        <td>{{ $allasset->system_id }}</td>
                                    </tr>
                                @endif

                                @if ($allasset->station_id )
                                    <tr>
                                        <td>{{ ('Assigned Station') }}</td>
                                        <td>{{ $allasset->station->station_name or '' }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->vehicle_id )
                                    <tr>
                                        <td>{{ ('Assigned Vehicle') }}</td>
                                        <td>{{$allasset->vehicle->vehicle_number or ''}}</td>
                                    </tr>
                                @endif
                                @if ($allasset->personnel_id )
                                    <tr>
                                        <td>{{ ('Assigned Person') }}</td>
                                        <td>{{ $allasset->personnel_id }}</td>
                                    </tr>
                                @endif
                                @if ($allasset->status_id )
                                    <tr>
                                        <td>{{ ('Status') }}</td>
                                        <td>{{$allasset->status->status or ''}}</td>
                                    </tr>
                                @endif
                                @if ($grants!== '')
                                        <tr>
                                        <td>{{ ('Grant') }}</td>
                                        <td>
                                            {{$grants}}
                                        </td>
                                    </tr>
                                @endif
                                @if ($allasset->vendor_id)
                                    <tr>
                                       <td>{{ ('Vendor') }}</td>
                                        <td>
                                            {{$allasset->vendor->vendor_name or ''}}
                                        </td>
                                    </tr>
                                @endif



                            </table>
                    </div>


                <div class="tab-pane" id="3b">
                    <table
                        data-toggle="table"  
                        data-search="true" 
                        data-cookie="true"
                        data-click-to-select="true"
                        data-cookie-id-table="asset-history-v1.1-1"
                        data-show-columns="true"
                        id="table-asset-history">
                    <thead>
                    <tr>
                        <th data-sortable="true">Updated On</th>
                        <th data-sortable="true">Asset Type</th>
                        <th data-sortable="true">Make</th>
                        <th data-sortable="true">Model</th>
                        <th data-sortable="true">Serial Number</th>
                        <th data-sortable="true">Status</th>
                        <th data-sortable="true">Location</th>
                        <th data-sortable="true">Vehicle</th>
                        <th data-sortable="true">Vendor</th>
                        <th data-sortable="true">Grant Name</th>
                    </tr>
                    </thead>
                    <tbody>
                       @foreach($allassethis2 as $history)
                            <tr>
                                <td>{{ $history->created_at }}</td>
                                <td>{{ $history->asset_type }}</td>
                                <td>{{ $history->make }}</td>
                                <td>{{ $history->model }}</td>
                                <td>{{ $history->serial_number }}</td>
                                <td>{{ $history->status }}</td>
                                <td>{{ $history->station_name }}</td>
                                <td>{{ $history->vehicle_name }}</td>
                                <td>{{ $history->vendor_name }}</td>
                                <td>{{ $history->grant_name}}</td> 
                            </tr>
                        @endforeach 
                    </tbody>
                    </table>

                </div>

                <div class="tab-pane" id="4a">
                    <h4>Tab for Files</h4>
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

    $('#table-asset-history').bootstrapTable({
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