@extends('layouts.app')

@section('content')
    <h3 class="page-title">All Assets</h3>

    <p>
        <a href="{{ route('all_assets.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($all_assets) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        {{--<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>--}}
                        <th>Asset Name</th>
                    <th>Model</th>
                    <th>Make</th>
                    <th>Manufacturer</th>
                    <th>Serial Number</th>
                    <th>Model IMEI #</th>
                    <th>Date Purchased</th>
                    <th>Warranty Date</th>
                    <th>Cost</th>
                    <th>IMEI #</th>
                    <th>Mobile Type</th>
                    <th>Operating System</th>
                    <th>Comments</th>
                    <th>Netmotion User ID</th>
                    <th>Netmotion Password</th>
                    <th>IP address</th>
                    <th>MAC #</th>
                    <th>CAD IP address</th>
                    <th>Sim Card ID</th>
                    <th>Sim Card Phone #</th>
                    <th>GPS Protocol</th>
                    <th>Firmware Version</th>
                    <th>Radio ID</th>
                    <th>MEID model #</th>
                    <th>MEID #</th>
                    <th>Phone #</th>
                    <th>Multi Tech SIM #</th>
                    <th>MDC User ID</th>
                    <th>MDC Password</th>
                    <th>CPU</th>
                    <th>Rram</th>
                    <th>Asset Tag #</th>
                    <th>networked</th>
                    <th>Drop Status</th>
                    <th>Switch Serial Number</th>
                    <th>Screen Size</th>
                    <th>A/C Adapter</th>
                    <th>Stylus</th>
                    <th>SEID Number</th>
                    <th>EMID</th>
                    <th>TeamViewer Number</th>
                    <th>Teamviewer alias</th>
                    <th>Model Description</th>
                    <th>Tier level</th>
                    <th>System alias</th>
                    <th>System ID Num</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($all_assets) > 0)
                        @foreach ($all_assets as $all_asset)
                            <tr>
                            {{--<tr data-entry-id="{{ $all_asset->id }}">--}}
                                <td></td>
                        <td>{{ $all_asset->name }}</td>
                        <td>{{ $all_asset->model }}</td>
                        <td>{{ $all_asset->make }}</td>
                        <td>{{ $all_asset->manu }}</td>
                        <td>{{ $all_asset->serial_number }}</td>
                        <td>{{ $all_asset->model_imei }}</td>
                        <td>{{ $all_asset->date_purchased }}</td>
                        <td>{{ $all_asset->warranty_date }}</td>
                        <td>{{ $all_asset->cost }}</td>
                        <td>{{ $all_asset->imei }}</td>
                        <td>{{ $all_asset->mobile_type }}</td>
                        <td>{{ $all_asset->os }}</td>
                        <td>{{ $all_asset->comments }}</td>
                        <td>{{ $all_asset->ntm_uid }}</td>
                        <td>{{ $all_asset->ntm_pass }}</td>
                        <td>{{ $all_asset->ip_address }}</td>
                        <td>{{ $all_asset->mac }}</td>
                        <td>{{ $all_asset->cad_ip }}</td>
                        <td>{{ $all_asset->sim_id }}</td>
                        <td>{{ $all_asset->sim_phone }}</td>
                        <td>{{ $all_asset->gps_protocol }}</td>
                        <td>{{ $all_asset->firmware_ver }}</td>
                        <td>{{ $all_asset->radio_id }}</td>
                        <td>{{ $all_asset->meid_model_num }}</td>
                        <td>{{ $all_asset->meid }}</td>
                        <td>{{ $all_asset->phone }}</td>
                        <td>{{ $all_asset->multi_tech_sim }}</td>
                        <td>{{ $all_asset->mdc_id }}</td>
                        <td>{{ $all_asset->mdc_pass }}</td>
                        <td>{{ $all_asset->cpu }}</td>
                        <td>{{ $all_asset->ram }}</td>
                        <td>{{ $all_asset->asset_tag }}</td>
                        <td>{{ $all_asset->network_status == 1 ? 'Yes' : 'No' }}</td>
                        <td>{{ $all_asset->drop_status }}</td>
                        <td>{{ $all_asset->switch_serial }}</td>
                        <td>{{ $all_asset->screen_size }}</td>
                        <td>{{ $all_asset->ac_adapter }}</td>
                        <td>{{ $all_asset->stylus }}</td>
                        <td>{{ $all_asset->seid_num }}</td>
                        <td>{{ $all_asset->emid }}</td>
                        <td>{{ $all_asset->tmv_num }}</td>
                        <td>{{ $all_asset->tmv_alias }}</td>
                        <td>{{ $all_asset->radio_desc }}</td>
                        <td>{{ $all_asset->tier_level }}</td>
                        <td>{{ $all_asset->system_alias }}</td>
                        <td>{{ $all_asset->system_id }}</td>

                                <td>
                                    <a href="{{ route('all_assets.show',[$all_asset->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('all_assets.edit',[$all_asset->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['all_assets.destroy', $all_asset->id])) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                        {!! Form::close() !!}
                                </td>
                            </tr>
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

{{--@section('javascript')--}}
    {{--<script>--}}
        {{--window.route_mass_crud_entries_destroy = '{{ route('all_assets.mass_destroy') }}';--}}
    {{--</script>--}}
{{--@endsection--}}