@extends('layouts.app')

@section('content')
    <h3 class="page-title">Todo App</h3>

    <p>
        <a href="{{ route('todos.create') }}" class="btn btn-success">Add New</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($todos) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Task</th>
                        <th>Notes</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($todos) > 0)
                        @foreach ($todos as $todo)
                            <tr data-entry-id="{{ $todo->id }}">
                                <td></td>
                                <td>{{ $todo->task }}</td>
                                <td>{!! $todo->notepad !!}</td>
                                <td>
                                    <a href="{{ route('todos.show',[$todo->id]) }}" class="btn btn-xs btn-primary">view</a>
                                    <a href="{{ route('todos.edit',[$todo->id]) }}" class="btn btn-xs btn-info">edit</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['todos.destroy', $todo->id])) !!}
                                    {!! Form::submit(('delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No entries in the table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('todos.mass_destroy') }}';
    </script>
@endsection