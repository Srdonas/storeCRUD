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
        public function store(Request $req){
            // dd($req->);
            $orderdetail = new OrderDetails();
            $orderdetail->order_id = $req->orderid;
            $orderdetail->cuantity = $req->quantity;
            $orderdetail->product_id = $req->product;

            $orderdetail->save();

            return view('home');
        }

}
