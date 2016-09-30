  <link rel="stylesheet" href="{{ url('css') }}/dashboard.css"/>

  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home"><img style="filter: grayscale(100%);" src="/img/c40.png"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/home"><strong>OMAHA FIRE</strong></a></li>
        <li data-toggle="tooltip" class="tip" data-placement="bottom" title="All Assets"><a href="#"><i class="fa fa-th fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip" data-placement="bottom" title="Stations"><a href="/stations"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip" data-placement="bottom" title="Vehicles"><a href="/vehicles"><i class="fa fa-ambulance fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip" data-placement="bottom" title="Service"><a href="#"><i class="fa fa-wrench fa-lg" aria-hidden="true"></i></a></li>
        <li data-toggle="tooltip" class="tip" data-placement="bottom" title="Reports"><a href="#"><i class="fa fa-line-chart fa-lg" aria-hidden="true"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Help</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Create <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Asset</a></li>
            <li><a href="/stations/create">Station</a></li>
            <li><a href="/vehicles/create">Vehicles</a></li>
            <!--<li role="separator" class="divider"></li>
            <li><a href="#">Other</a></li>-->
          </ul>
        </li>
        <form class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Lookup Asset">
          </div>
          <button type="submit" class="btn btn-default" style="margin-right: 15px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </form>
      </ul>
    </div>
  </div>
</nav>