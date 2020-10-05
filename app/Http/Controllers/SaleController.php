<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Sale;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SaleController extends Controller
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
    public function index()
    {
$month = date("F");
$total = Order::where('month', $month)->sum('sub_total');
        $sales = Order::where('month', $month)->get();
       return view('sales.monthly', compact('sales','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function todaysale(){
        $date = date('d/m/y');
        $sales = Order::where('date', $date)->get();
        $total = Order::where('date', $date)->sum('sub_total');
        return view('sales.today', compact('sales','total'));
    }
    public function yearlysale(){
        $monthly = date('Y');
        $sales = Order::where('year', $monthly)->get();
        $total = Order::where('year', $monthly)->sum('sub_total');
        return view('sales.yearly', compact('sales','total'));
    }
    public function januarysale(){
        $month = "January";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function februarysale(){
        $month = "February";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function marchsale(){
        $month = "March";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function aprilsale(){
        $month = "April";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function maysale(){
        $month = "May";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function junesale(){
        $month = "June";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function julysale(){
        $month = "July";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function augustsale(){
        $month = "August";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function septembersale(){
        $month = "September";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
    public function octobersale(){
        $month = "October";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }public function novembersale(){
        $month = "November";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }public function decembersale(){
        $month = "December";
        $sales = Order::where('month', $month)->get();
        $total = Order::where('month', $month)->sum('sub_total');
        return view('sales.monthly', compact('sales','total'));
    }
}
