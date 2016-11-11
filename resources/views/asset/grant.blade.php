{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}
    
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('grant_id', 'Grant ID *', ['class' => 'control-label']) !!}
            {!! Form::text('grant_id', old('grant_id'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('date_issued', 'Date Issued', ['class' => 'control-label']) !!}
            {!! Form::text('date_issued', old('date_issued'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('type', 'Type', ['class' => 'control-label']) !!}
            {!! Form::text('type', old('type'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('date_matures', 'Date Matures', ['class' => 'control-label']) !!}
            {!! Form::text('date_matures', old('date_matures'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('grant_value', 'Grant Value', ['class' => 'control-label']) !!}
            {!! Form::text('grant_value', old('grant_value'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
    <div class="col-xs-6 form-group">
            {!! Form::label('asset_type', 'Asset Type', ['class' => 'control-label']) !!}
            {!! Form::text('asset_type', old('asset_type'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
            {!! Form::text('comments', old('comments'), ['class' => 'form-control']) !!}
        </div>
        
    </div>

<div>
{!! Form::submit('Create',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
<a href="{{ route('all_assets.index') }}" class="btn btn-danger">Cancel</a>
</div>