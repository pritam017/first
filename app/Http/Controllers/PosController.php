<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $customers = Customer::all();
        $category = Category::all();
return view('pos.index', compact('products', 'customers', 'category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pendingOrder()
    {
        $pending_order = DB::table('orders')->join('customers','orders.customer_id','customers.id')->select('customers.name', 'orders.*')->where('order_status', 'pending')->get();
        return view('order.pending', compact('pending_order'));
    }


}
