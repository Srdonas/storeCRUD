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
                    @method('POST')
                    <form action="{{ route('orderdetails.store') }}" method="POST"  role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            {!! Form::hidden('orderid', $orderid) !!}

                            <select id="product" name="product">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>

                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" min="1" max="100"
                                step="1" value="1">
                        </div>
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
