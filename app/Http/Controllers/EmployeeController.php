<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Image;
use File;


class EmployeeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $employees = Employee::all();
       return view('employee.all_employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.add_employee');
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
            'email' => 'required|unique:employees',
            'phone' => 'required',
            'address' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'photo' => 'required',
            'nid' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
        ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->education = $request->education;
        $employee->experience = $request->experience;
        $employee->nid_no = $request->nid;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;


        if($request->photo){
            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/employee/'. $img);
            Image::make($image)->save($location);
            $employee->photo = $img;
        }

        $employee->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit_employee', compact('employee'));
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
            'education' => 'required',
            'experience' => 'required',
            'nid' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
        ]);
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->education = $request->education;
        $employee->experience = $request->experience;
        $employee->nid_no = $request->nid;
        $employee->salary = $request->salary;
        $employee->vacation = $request->vacation;
        $employee->city = $request->city;


        if($request->photo){
            if(File::exists('images/employee/'. $employee->photo)){
                File::delete('images/employee/'. $employee->photo);
            }
            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/employee/'. $img);
            Image::make($image)->save($location);
            $employee->photo = $img;
        }

        $employee->save();

        Toastr::success('Data Update Successfully');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);

        if ( !is_null($employee) ){
            if ( File::exists('images/employee/' . $employee->photo ) ){
                        File::delete('images/employee/' . $employee->photo);
            }
            $employee->delete();
        }
        Toastr::success('Data Deleted Successfully');
        return redirect()->route('employee.index');
    }
}
