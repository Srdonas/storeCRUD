<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::date('date_time', $order->date_time, ['class' => 'form-control' . ($errors->has('date_time') ? ' is-invalid' : ''), 'placeholder' => 'Date Time']) }}
            {!! $errors->first('date_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</div>
