<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Imports\ProductImport;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Supplier;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
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
        $products = Product::all();

       return view('product.manage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers= Supplier::all();
        return view('product.add', compact('suppliers','categories'));
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
            'product_name' => 'required',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'product_code' => 'required',
            'product_garage' => 'required',
            'product_route' => 'required',
            'product_image' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',

        ]);

        $product = new Product();

        $product->product_name = $request->product_name;
        $product->cat_id = $request->cat_id;
        $product->sup_id = $request->sup_id;
        $product->product_code = $request->product_code;
        $product->product_garage = $request->product_garage;
        $product->product_route = $request->product_route;

        $product->buy_date = $request->buy_date;
        $product->expire_date = $request->expire_date;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        if($request->product_image){
            $image = $request->file('product_image');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/product/'. $img);
            Image::make($image)->save($location);
            $product->product_image = $img;
        }

        $product->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('product.index');

}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product', 'categories','suppliers'));
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

            'product_name' => 'required',
            'cat_id' => 'required',
            'sup_id' => 'required',
            'product_code' => 'required',
            'product_garage' => 'required',
            'product_route' => 'required',
            'buy_date' => 'required',
            'expire_date' => 'required',
            'buying_price' => 'required',
            'selling_price' => 'required',
        ]);
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->cat_id = $request->cat_id;
        $product->sup_id = $request->sup_id;
        $product->product_code = $request->product_code;
        $product->product_garage = $request->product_garage;
        $product->product_route = $request->product_route;

        $product->buy_date = $request->buy_date;
        $product->expire_date = $request->expire_date;
        $product->buying_price = $request->buying_price;
        $product->selling_price = $request->selling_price;
        if($request->product_image){
            if(File::exists('images/employee/'. $product->photo)){
                File::delete('images/employee/'. $product->photo);
            }
            $image = $request->file('product_image');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/product/'. $img);
            Image::make($image)->save($location);
            $product->product_image = $img;
        }


        $product->save();

        Toastr::success('Data Updated Successfully');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);


            $product->delete();

        Toastr::success('Data Deleted Successfully');
        return redirect()->route('product.index');
    }
public function productImport(){
    return view('product.import');
}
public function export(){
    return Excel::download(new ProductsExport, 'products.xlsx');
    }
    public function import(Request $request){
 Excel::import(new ProductImport, $request->file('import_file'));

 Toastr::success('Data Import Successfully');
 return redirect()->route('product.index');
    }
}
