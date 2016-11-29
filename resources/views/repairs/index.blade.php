@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            In Repair List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($relation) > 0 ? 'datatable' : '' }} ">
                <thead>
                <tr>
                    <th>Vehicles</th>
                    <th> </th>
                </tr>
                </thead>

                <tbody>
                @if (count($relation) > 0)
                    @foreach ($relation as $repair)
                        @if ($repair->van == 0)
                            @continue
                        @endif
                        <tr data-entry-id="">
                            <td>{{$repair->make}} {{$repair->model}} | {{$repair->year}} | {{ $repair->van or '' }}</td>
                            <td><a href="{{ route('vehicles.show',[$repair->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">No entries in the table</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <table class="table table-bordered table-striped {{ count($relation) > 0 ? 'datatable' : '' }} ">
                <thead>
                    <tr>
                        <th>Assets</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($relation) > 0)
                        @foreach ($relation as $repair)
                            <tr data-entry-id="">
                                <td>{{$repair->asset_type}} | {{ $repair->serial_number}}</td>
                                <td><a href="{{ route('all_assets.show',[$repair->id]) }}" class="btn btn-xs btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No entries in the table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

