<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Cart;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        Cart::add(['id' => $product->id, 'product_name' => $product->product_name, 'qty' => $request->qty, 'selling_price' => $product->selling_price, 'weight' => 550]);

    Toastr::success('Product Added Successfully');
    return redirect()->back();

    }
   public function update(Request $request,$rowId)
    {
$qty = $request->qty;
Cart::update($rowId, $qty);
Toastr::success('Data Update Successfully');
    return redirect()->back();
    }
    public function remove($rowId){
        Cart::remove($rowId);
Toastr::success('Data Removed Successfully');
    return redirect()->back();
    }
    public function invoice(Request $request){
        $contents = Cart::content();
        $cst_id = $request->cst_id;
        $customer = Customer::where('id', $cst_id)->first();

        return view('invoice.index', compact('contents', 'customer'));

    }
    public function store(Request $request){
        $data = array();
        $data['customer_id'] = $request->customer_id;
        $data['date'] = $request->order_date;
        $data['month'] = date('F');
        $data['year'] = date("Y");
        $data['order_status'] = $request->order_status;
        $data['total_products'] = $request->total_products;
        $data['sub_total'] = $request->sub_total;
        $data['vat'] = $request->vat;
        $data['total'] = $request->total;
        $data['payment_status'] = $request->payment_status;
        $data['pay'] = $request->pay;
        $data['due'] = $request->due;

        $order_id = Order::insertGetId($data);
        $contents = Cart::content();
        $odata = array();
        foreach($contents as $content){
            $odata['order_id'] = $order_id;
            $odata['product_id'] = $content->id;
            $odata['quantity'] = $content->qty;
            $odata['unit_cost'] = $content->price;
            $odata['total'] = $content->total;
 DB::table('orderdetails')->insert($odata);

        }
        Toastr::success('Order Added Successfully| Please Deliver The Product');
        Cart::destroy();
    return redirect()->route('home');
    }


}
