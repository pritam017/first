<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
class SupplierController extends Controller
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
        $suppliers = Supplier::get();
       return view('supplier.manage', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.add');
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
            'email' => 'required|unique:suppliers',
            'phone' => 'required',
            'address' => 'required',
            'type' => 'required',
            'shop_name' => 'required',

            'city' => 'required',
        ]);
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->type = $request->type;
        $supplier->shop_name = $request->shop_name;
        $supplier->account_holder = $request->account_holder;
        $supplier->account_number = $request->account_number;
        $supplier->bank_name = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        $supplier->city = $request->city;


        if($request->photo){
            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/supplier/'. $img);
            Image::make($image)->save($location);
            $supplier->photo = $img;
        }

        $supplier->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $supplier = Supplier::findOrFail($id);
     return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('Supplier.edit', compact('supplier'));
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
            'type' => 'required',
            'address' => 'required',
            'shop_name' => 'required',
            'city' => 'required',
        ]);
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->type = $request->type;
        $supplier->address = $request->address;
        $supplier->shop_name = $request->shop_name;
        $supplier->account_holder = $request->account_holder;
        $supplier->account_number = $request->account_number;
        $supplier->bank_name = $request->bank_name;
        $supplier->branch_name = $request->branch_name;
        $supplier->city = $request->city;



        if($request->photo){
            if(File::exists('images/supplier/'. $supplier->photo)){
                File::delete('images/supplier/'. $supplier->photo);
            }
            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/supplier/'. $img);
            Image::make($image)->save($location);
            $supplier->photo = $img;
        }

        $supplier->save();

        Toastr::success('Data Update Successfully');
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);

        if ( !is_null($supplier) ){
            if ( File::exists('images/supplier/' . $supplier->photo ) ){
                        File::delete('images/supplier/' . $supplier->photo);
            }
            $supplier->delete();
        }
        Toastr::success('Data Deleted Successfully');
        return redirect()->route('supplier.index');
    }
}
