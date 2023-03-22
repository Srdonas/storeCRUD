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
                        <li><strong>Product name:</strong>
                            {{ $orderDetail->product->name }}</li>
                        <li> <strong>Quantity:</strong>
                            {{ $orderDetail->cuantity }}</li>
                        <li> <strong>Stock:</strong>
                            {{ $orderDetail->product->stock }}</li>
                        <li> <strong>Price:</strong>
                            {{ $orderDetail->product->price }}</li>
                            <hr>
                    @endforeach
                    <ul>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
