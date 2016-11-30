@extends('layouts.app')


@section('crumbs')
  <ol class="breadcrumb">
    <li class="active">Dashboard</li>
  </ol>
@endsection


@section('content')
<div class="row" style="margin: 10px 10px 0px 10px">

<a href="{{ route('all_assets.index') }}">
    <div class="col-md-3 large-category">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-th fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>All Assets</h3>
        </div>
      </div>
    </div>
</a>

<a href="{{ route('stations.index') }}">
    <div class="col-md-3 large-category">
      <div class="thumbnail stationss">
        <div class="thumbnail-dash">
          <i class="fa fa-home fa-4x" aria-hidden="true"></i>

        </div>
        <div class="caption">
          <h3>Stations</h3>
        </div>
      </div>
    </div>
</a>

<a href="{{ route('vehicles.index') }}">
    <div class="col-md-3 large-category">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-ambulance fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Vehicles</h3>
        </div>
      </div>
    </div>
</a>

<a href="{{ route('repairs.index') }}">
    <div class="col-md-3 large-category">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-wrench fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Service</h3>
        </div>
      </div>
    </div>
</a>


</div>

<div class="row" style="margin: 0 10px 0px 10px">

    <div class="panel panel-default panel-shadow"  style="margin:5px;" hidden>
        <div class="panel-heading">
            Reminders
        </div>

        <div class="panel-body">

        <a id="toolbar" href="{{ route('stations.create') }}" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i></a>

            <table  data-toolbar="#toolbar"
                    data-toggle="table"  
                    data-search="true" 
                    data-cookie="true"
                    data-click-to-select="true"
                    data-cookie-id-table="dashboard-index-v1.1-1"
                    data-show-columns="true"
                    id="table">
                    <thead>
                        <tr>
                            <th data-sortable="true">Name</th>
                            <th data-sortable="true">Reminder</th>
                            <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>

                        </tr>
                    </thead>
                <tbody>
                  <tr>
                    <td>Reminder 1</td>
                    <td>Comment 1</td>
                    <td>
                      <div style="float: right;">
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button"  class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Reminder 2</td>
                    <td>Comment 2</td>
                    <td>
                      <div style="float: right;">
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button"  class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Reminder 3</td>
                    <td>Comment 3</td>
                    <td>
                      <div style="float: right;">
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button"  class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Reminder 4</td>
                    <td>Comment 4</td>
                    <td>
                      <div style="float: right;">
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button"  class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Reminder 5</td>
                    <td>Comment 5</td>
                    <td>
                      <div style="float: right;">
                        <a href="#" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="#" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a type="button"  class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </div>
                    </td>
                  </tr>
                </tbody>
            </table>
      </div>
    </div>
</div>


@endsection

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

@endsection