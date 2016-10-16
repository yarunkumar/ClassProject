{!! Form::open(['method' => 'POST', 'route' => ['all_assets.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('model_number', 'Model Number', ['class' => 'control-label']) !!}
            {!! Form::text('model_number', old('model_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('make', 'Make', ['class' => 'control-label']) !!}
            {!! Form::text('make', old('make'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('serial_number', 'Serial Number *', ['class' => 'control-label']) !!}
            {!! Form::text('serial_number', old('serial_number'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('size', 'Size', ['class' => 'control-label']) !!}
            {!! Form::text('size', old('size'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('date_purchases', 'Date Purchased', ['class' => 'control-label']) !!}
            {!! Form::text('date_purchases', old('date_purchases'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('cost', 'Cost', ['class' => 'control-label']) !!}
            {!! Form::text('cost', old('cost'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}