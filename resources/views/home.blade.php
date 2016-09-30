@extends('layouts.app')


@section('crumbs')
  <ol class="breadcrumb">
    <li class="active">Dashboard</li>
  </ol>
@endsection


@section('content')
<div class="row" style="margin: 10px 10px 0px 10px">

    <div class="col-md-3">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-th fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Total Assets</h3>
        </div>
      </div>
    </div>

<a href="{{ route('stations.index') }}">
    <div class="col-md-3">
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
    <div class="col-md-3">
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

    <div class="col-md-3">
      <div class="thumbnail">
        <div class="thumbnail-dash">
          <i class="fa fa-wrench fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Service</h3>
        </div>
      </div>
    </div>



</div>


<div class="row" style="margin: 15px 0 20px 25px;">
  <div class="col-md-6 cal shadow">
    <div id='calendar'></div>
  </div>

    <div class="col-md-6">

      <div class="thumbnail" style="margin-left: 15px; width: 100%; height: 250px;">
        
        <div class="caption">
          <div style="height: 20px; width: 300px;"><strong>Fiscal Year Expenditures:</strong></div>
          <div style="float: left;" id="chart"></div>
        </div>
      </div>

      <div class="thumbnail" style="margin-left: 15px; width: 100%; height: 250px;">
        <div class="thumbnail-dash">
          <i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i>
        </div>
        <div class="caption">
          <h3>Checkout System</h3>
        </div>
      </div>

    </div>

</div>

<div id="chart"></div>
@endsection
