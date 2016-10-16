{!! Form::open(['method' => 'POST', 'route' => ['vehicles.store']]) !!}

    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_id', 'SIM Card ID', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_id', old('sim_card_id'), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_phone_number', 'Sim Card Phone Number', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_phone_number', old('sim_card_phone_number'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 form-group">
            {!! Form::label('sim_card_ip', 'SIM Card IP', ['class' => 'control-label']) !!}
            {!! Form::text('sim_card_ip', old('sim_card_ip'), ['class' => 'form-control']) !!}
        </div>
    </div>

{!! Form::submit('Save',['class' => 'btn btn-success']) !!}
{!! Form::close() !!}