@extends('layouts.app')

@section('content')
    <h3 class="page-title">Related Files</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped datatable">
                        <th>Related File</th>
                    <td><a href="{{ asset('uploads/'.$file->related_file) }}">Download file</a></td>
                        {{--</tr><tr><th>Related Image</th>--}}
                    {{--<td>@if($related_file->related_image!= '')<img src="{{ asset('uploads/thumb/'.$related_file->related_image) }}">@endif</td>--}}
                        <th>Comments</th>
                    <td>{{ $file->comments }}</td>

                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('related_files.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop