<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;

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
            //  request()->validate(Product::$rules);
            // $req->quantity = $quantity;

            $stock = Product::where("id",$req->product)->get('stock');

            $orderdetail = new OrderDetail();
            $orderdetail->order_id = $req->orderid;
            $orderdetail->cuantity = $req->quantity;
            $orderdetail->product_id = $req->product;

            // $newstock = $stock- $req->quantity;
            // $product->update($newstock);


            $orderdetail->save();



            return redirect()->route('orders.index')
            ->with('success', 'Product added successfully.');
        }



}
