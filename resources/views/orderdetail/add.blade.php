@extends('layouts.app')

@section('template_title')
    Add Product Order
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Order</span>
                    </div>
                    <form method="POST" action="{{ route('orderdetails.store') }}"  role="form" enctype="multipart/form-data">

                    <div class="card-body">
                     {{$orderid}}
                        @foreach ($products as $product)

                        @endforeach
                        {!! Form::select($product->id, $products, null, ['class' => 'form-control']) !!}
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="100" step="1" value="1">
                    </div>
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
