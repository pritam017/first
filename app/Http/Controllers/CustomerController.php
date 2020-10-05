<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class CustomerController extends Controller
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
       $customers = Customer::get();
      return view('customer.manage', compact('customers'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('customer.add');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|max:50',
           'email' => 'required|unique:customers',
           'phone' => 'required',
           'address' => 'required',
           'shop_name' => 'required',
           'account_holder' => 'required',
           'photo' => 'required',
           'account_number' => 'required',
           'bank_name' => 'required',
           'bank_branch' => 'required',
           'city' => 'required',
       ]);
       $customer = new Customer();
       $customer->name = $request->name;
       $customer->email = $request->email;
       $customer->phone = $request->phone;
       $customer->address = $request->address;
       $customer->shop_name = $request->shop_name;
       $customer->account_holder = $request->account_holder;
       $customer->account_number = $request->account_number;
       $customer->bank_name = $request->bank_name;
       $customer->bank_branch = $request->bank_branch;
       $customer->city = $request->city;


       if($request->photo){
           $image = $request->file('photo');
           $img = time() . '.' . $image->getClientOriginalName();
           $location = public_path('images/customer/'. $img);
           Image::make($image)->save($location);
           $customer->photo = $img;
       }

       $customer->save();

       Toastr::success('Data Save Successfully');
       return redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
    $customer = Customer::findOrFail($id);
    return view('customer.show', compact('customer'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $customer = Customer::findOrFail($id);
       return view('customer.edit', compact('customer'));
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
       $request->validate([
           'name' => 'required|max:50',
           'email' => 'required',
           'phone' => 'required',
           'address' => 'required',
           'shop_name' => 'required',
           'account_holder' => 'required',
           'account_number' => 'required',
           'bank_name' => 'required',
           'bank_branch' => 'required',
           'city' => 'required',
       ]);
       $customer = Customer::find($id);
       $customer->name = $request->name;
       $customer->email = $request->email;
       $customer->phone = $request->phone;
       $customer->address = $request->address;
       $customer->shop_name = $request->shop_name;
       $customer->account_holder = $request->account_holder;
       $customer->account_number = $request->account_number;
       $customer->bank_name = $request->bank_name;
       $customer->bank_branch = $request->bank_branch;
       $customer->city = $request->city;



       if($request->photo){
           if(File::exists('images/customer/'. $customer->photo)){
               File::delete('images/customer/'. $customer->photo);
           }
           $image = $request->file('photo');
           $img = time() . '.' . $image->getClientOriginalName();
           $location = public_path('images/customer/'. $img);
           Image::make($image)->save($location);
           $customer->photo = $img;
       }

       $customer->save();

       Toastr::success('Data Update Successfully');
       return redirect()->route('customer.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $customer = Customer::find($id);

       if ( !is_null($customer) ){
           if ( File::exists('images/customer/' . $customer->photo ) ){
                       File::delete('images/customer/' . $customer->photo);
           }
           $customer->delete();
       }
       Toastr::success('Data Deleted Successfully');
       return redirect()->route('customer.index');
   }
}
