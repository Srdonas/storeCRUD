<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::date('date_time', $order->date_time, ['class' => 'form-control' . ($errors->has('date_time') ? ' is-invalid' : ''), 'placeholder' => 'Date Time']) }}
            {!! $errors->first('date_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('Add a product') }}
        <ul class="list-group">
            <li class="list-group-item">

                <div class="input-group">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <button class="btn btn-outline-success" type="button">+</button>
                    <button class="btn btn-outline-danger" type="button">x</button>
                  </div>
                  {{-- <form method="POST" action="{{ route('order.addToOrder', $order->id) }}">
                    <div class="form-group">
                        <label for="items">Select items:</label>
                        <select name="items[]" multiple class="form-control">
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add items to order</button>
                </form> --}}
            </li>

          </ul>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
