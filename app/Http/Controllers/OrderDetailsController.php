<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetails;

class OrderDetailsController extends Controller
{
    public function add($id) {
    $products = Product::all();
    $orderid = $id;
    // dd($products);

    return view('orderdetail.add',compact('products','orderid'));
}
    public function store(Request $request){
        dd($request);
        return view('order.index');
    }
}
