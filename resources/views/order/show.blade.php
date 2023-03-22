@extends('layouts.app')

@section('template_title')
    {{ __('Show') }} Order
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <ul>
                            <strong>Date Time:</strong>
                            {{ $order->date_time }}
                    </div>
                    @foreach ($orderDetails as $orderDetail)
                    <ul class="list-group list-group-horizontal-lg">
                        <li class="list-group-item">Product name: {{ $orderDetail->product->name }}</li>
                        <li class="list-group-item">Quantity: {{ $orderDetail->cuantity }}</li>
                        {{-- <li class="list-group-item">Stock: {{ $orderDetail->product->stock }}</li> --}}
                        <li class="list-group-item">Price: ${{ $orderDetail->product->price }}</li>
                        <li class="list-group-item-success">Total: $ {{ $orderDetail->product->price * $orderDetail->cuantity }} MX</li>
                      </ul>
                      <hr>
                    @endforeach
                    <li class="list-group-item-warning"> Full cost: $ {{ $total}} MX</li>
                    {{-- NO ENTENDI MUY BIEN COMO CONVERTIR BLUE DOLLAR A DOLLAR --}}
                    <li class="list-group-item-warning"> Full cost: $ {{ $total * $dollar}} USA</li>
                    </ul>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
