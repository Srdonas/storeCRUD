@extends('layouts.app')

@section('template_title')
    Orders
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Orders') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Open an Order') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ORDER ID</th>

										<th>Date Time</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>

											<td>{{ $order->date_time }}</td>

                                            <td>
                                                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('orders.show',$order->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('orders.edit',$order->id) }}"><i class="fa fa-fw fa-edit"></i> Change order date</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                    <a class="btn btn-sm btn-success" href="{{ route('orderdetails.add',$order->id) }}"><i class="fa fa-fw fa-edit"></i> Add product to order</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $orders->links() !!}
            </div>
        </div>
    </div>
@endsection
