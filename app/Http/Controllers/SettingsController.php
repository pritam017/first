<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Settings::first();
        return view('setting.manage', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'company_name' => 'required',
            'company_address' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',

            'company_logo' => 'required',
            'company_mobile' => 'required',
            'company_country' => 'required',
            'company_zip_code' => 'required',

        ]);

        $setting =  Settings::find($id);

        $setting->company_name = $request->company_name;
        $setting->company_address = $request->company_address;
        $setting->company_email = $request->company_email;
        $setting->company_phone = $request->company_phone;
        $setting->company_mobile = $request->company_mobile;
        $setting->company_city = $request->company_city;

        $setting->company_country = $request->company_country;
        $setting->company_zip_code = $request->company_zip_code;

        if($request->company_logo){
            if(File::exists('images/logo/'. $setting->company_logo)){
                File::delete('images/logo/'. $setting->company_logo);
            }
            $image = $request->file('company_logo');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/logo/'. $img);
            Image::make($image)->save($location);
            $setting->company_logo = $img;
        }

        $setting->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
