@extends('layouts.app')

@section('content')
    <h3 class="page-title">All Assets</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <tr><th>Asset Name</th>
                    <td>{{ $all_asset->name }}</td>
                        </tr><tr><th>Model</th>
                    <td>{{ $all_asset->model }}</td>
                        </tr><tr><th>Make</th>
                    <td>{{ $all_asset->make }}</td>
                        </tr><tr><th>Manufacturer</th>
                    <td>{{ $all_asset->manu }}</td>
                        </tr><tr><th>Serial Number</th>
                    <td>{{ $all_asset->serial_number }}</td>
                        </tr><tr><th>Model IMEI #</th>
                    <td>{{ $all_asset->model_imei }}</td>
                        </tr><tr><th>Date Purchased</th>
                    <td>{{ $all_asset->date_purchased }}</td>
                        </tr><tr><th>Warranty Date</th>
                    <td>{{ $all_asset->warranty_date }}</td>
                        </tr><tr><th>Cost</th>
                    <td>{{ $all_asset->cost }}</td>
                        </tr><tr><th>IMEI #</th>
                    <td>{{ $all_asset->imei }}</td>
                        </tr><tr><th>Mobile Type</th>
                    <td>{{ $all_asset->mobile_type }}</td>
                        </tr><tr><th>Operating System</th>
                    <td>{{ $all_asset->os }}</td>
                        </tr><tr><th>Comments</th>
                    <td>{{ $all_asset->comments }}</td>
                        </tr><tr><th>Netmotion User ID</th>
                    <td>{{ $all_asset->ntm_uid }}</td>
                        </tr><tr><th>Netmotion Password</th>
                    <td>{{ $all_asset->ntm_pass }}</td>
                        </tr><tr><th>IP address</th>
                    <td>{{ $all_asset->ip_address }}</td>
                        </tr><tr><th>MAC #</th>
                    <td>{{ $all_asset->mac }}</td>
                        </tr><tr><th>CAD IP address</th>
                    <td>{{ $all_asset->cad_ip }}</td>
                        </tr><tr><th>Sim Card ID</th>
                    <td>{{ $all_asset->sim_id }}</td>
                        </tr><tr><th>Sim Card Phone #</th>
                    <td>{{ $all_asset->sim_phone }}</td>
                        </tr><tr><th>GPS Protocol</th>
                    <td>{{ $all_asset->gps_protocol }}</td>
                        </tr><tr><th>Firmware Version</th>
                    <td>{{ $all_asset->firmware_ver }}</td>
                        </tr><tr><th>Radio ID</th>
                    <td>{{ $all_asset->radio_id }}</td>
                        </tr><tr><th>MEID model #</th>
                    <td>{{ $all_asset->meid_model_# }}</td>
                        </tr><tr><th>MEID #</th>
                    <td>{{ $all_asset->meid }}</td>
                        </tr><tr><th>Phone #</th>
                    <td>{{ $all_asset->phone }}</td>
                        </tr><tr><th>Multi Tech SIM #</th>
                    <td>{{ $all_asset->multi_tech_sim }}</td>
                        </tr><tr><th>MDC User ID</th>
                    <td>{{ $all_asset->mdc_id }}</td>
                        </tr><tr><th>MDC Password</th>
                    <td>{{ $all_asset->mdc_pass }}</td>
                        </tr><tr><th>CPU</th>
                    <td>{{ $all_asset->cpu }}</td>
                        </tr><tr><th>Rram</th>
                    <td>{{ $all_asset->ram }}</td>
                        </tr><tr><th>Asset Tag #</th>
                    <td>{{ $all_asset->asset_tag }}</td>
                        </tr><tr><th>networked</th>
                    <td>{{ $all_asset->network_status == 1 ? 'Yes' : 'No' }}</td>
                        </tr><tr><th>Drop Status</th>
                    <td>{{ $all_asset->drop_status }}</td>
                        </tr><tr><th>Switch Serial Number</th>
                    <td>{{ $all_asset->switch_serial }}</td>
                        </tr><tr><th>Screen Size</th>
                    <td>{{ $all_asset->screen_size }}</td>
                        </tr><tr><th>A/C Adapter</th>
                    <td>{{ $all_asset->ac_adapter }}</td>
                        </tr><tr><th>Stylus</th>
                    <td>{{ $all_asset->stylus }}</td>
                        </tr><tr><th>SEID Number</th>
                    <td>{{ $all_asset->seid_num }}</td>
                        </tr><tr><th>EMID</th>
                    <td>{{ $all_asset->emid }}</td>
                        </tr><tr><th>TeamViewer Number</th>
                    <td>{{ $all_asset->tmv_num }}</td>
                        </tr><tr><th>Teamviewer alias</th>
                    <td>{{ $all_asset->tmv_alias }}</td>
                        </tr><tr><th>Model Description</th>
                    <td>{{ $all_asset->radio_desc }}</td>
                        </tr><tr><th>Tier level</th>
                    <td>{{ $all_asset->tier_level }}</td>
                        </tr><tr><th>System alias</th>
                    <td>{{ $all_asset->system_alias }}</td>
                        </tr><tr><th>System ID Num</th>
                    <td>{{ $all_asset->system_id }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('all_assets.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop