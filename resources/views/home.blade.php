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
          <h3>All Assets: {{$assets}}</h3>
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
          <h3>Stations: {{$stations}}</h3>
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
          <h3>Vehicles: {{$vehicles}}</h3>
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

        <a id="toolbar" data-toggle="modal" data-target="#myModal" class="btn btn-new"><i class="fa fa-plus" aria-hidden="true"></i></a>

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
                          <th>Task</th>
                          <th>Notes</th>
                          <th data-switchable="false" data-searchable="false" data-sortable="false">&nbsp;</th>
                        </tr>
                    </thead>
                <tbody>

                    @if (count($todos) > 0)
                        @foreach ($todos as $todo)
                            <tr data-entry-id="{{ $todo->id }}">
                                <td>{{ $todo->task }}</td>
                                <td>{!! $todo->notepad !!}</td>
                                <td>
                                  <div style="float: right;">
                                      <a href="{{ route('todos.show',[$todo->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                      <a href="{{ route('todos.edit',[$todo->id]) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                      <a type="button" data-toggle="modal" data-target="#{{ $todo->id }}" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                  </div>
                                </td>
                            </tr>










                            <div class="modal fade" id="{{ $todo->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                  </div>
                                  <div class="modal-body">


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('task', 'Task', ['class' => 'control-label']) !!}
                    {!! Form::text('task', old('task'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('task'))
                        <p class="help-block">
                            {{ $errors->first('task') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notepad', 'Notepad', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notepad', old('notepad'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notepad'))
                        <p class="help-block">
                            {{ $errors->first('notepad') }}
                        </p>
                    @endif
                </div>
            </div>
            {!! Form::submit(('Update'), ['class' => 'btn btn-success']) !!}
            <a href="{{ url('/') }}" class="btn btn-default">Cancel</a>
            {!! Form::close() !!}


                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'route' => ['todos.destroy', $todo->id])) !!}
                                    {{Form::button('<i class="fa fa-trash"></i> DELETE', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                                    {!! Form::close() !!}
                                  </div>
                                </div>
                              </div>
                            </div>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No reminders to show.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
      </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">New Note</h4>
      </div>
      <div class="modal-body">

            {!! Form::open(['method' => 'POST', 'route' => ['todos.store']]) !!}
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('task', 'Task', ['class' => 'control-label']) !!}
                    {!! Form::text('task', old('task'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('task'))
                        <p class="help-block">
                            {{ $errors->first('task') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notepad', 'Notepad', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notepad', old('notepad'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notepad'))
                        <p class="help-block">
                            {{ $errors->first('notepad') }}
                        </p>
                    @endif
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {!! Form::submit(('Create'), ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
      </div>
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