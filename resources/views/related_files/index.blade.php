@extends('layouts.app')

@section('content')
    <h3 class="page-title">Related Files</h3>

    <p>
        <a href="{{ route('related_files.create') }}" class="btn btn-success">Add new</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($related_files) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Related File</th>
                        <th>Comments</th>
                    
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($related_files) > 0)
                        @foreach ($related_files as $file)
                            <tr data-entry-id="{{ $file->id }}">
                                <td></td>
                                <td>@if($file->image= '')<img src="{{ asset('uploads/thumb/'.$file->related_file) }}">
                                    @elseif($file->related_file!= '')<a href="{{ asset('uploads/'.$file->related_file) }}">Download file</a>
                                    @endif
                                </td>

                        <td>{{ $file->comments }}</td>
                        
                                <td>
                                    <a href="{{ route('related_files.show',[$file->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    <a href="{{ route('related_files.edit',[$file->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    {!! Form::open(array(
                'style' => 'display: inline-block;',
                'method' => 'DELETE',
                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                'route' => ['related_files.destroy', $file->id])) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('related_files.mass_destroy') }}';
    </script>
@endsection