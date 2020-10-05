<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
use DB;

class SalaryController extends Controller
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
        $salaries = Salary::all();

       return view('salary.manage', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee= Employee::all();
        return view('salary.add', compact('employee'));
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
            'emp_id' => 'required',

            'month' => 'required',
            'year' => 'required',

        ]);
        $month = $request->month;
        $emp_id = $request->emp_id;

        $advance = Salary::where('month',$month)->where('emp_id', $emp_id)->first();
if($advance === NULL){
        $salary = new Salary();

        $salary->emp_id = $request->emp_id;

        $salary->month = $request->month;
        $salary->year = $request->year;

        $salary->advance_salary = $request->advance_salary;

        $salary->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('salary.index');
    }else{
        Toastr::error('Already have this data');
        return redirect()->route('salary.index');
    }
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
        $employee = Employee::all();
        $salary = Salary::findOrFail($id);
        return view('salary.edit', compact('salary', 'employee'));
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
            'emp_id' => 'required',
            'month' => 'required',
            'year' => 'required',

        ]);
        $salary = Salary::findOrFail($id);
        $salary->emp_id = $request->emp_id;

        $salary->month = $request->month;
        $salary->year = $request->year;

        $salary->advance_salary = $request->advance_salary;

        $salary->save();

        Toastr::success('Data Updated Successfully');
        return redirect()->route('salary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salary::find($id);


            $salary->delete();

        Toastr::success('Data Deleted Successfully');
        return redirect()->route('salary.index');
    }
    public function totalsalary(){
        $month = date("F", strtotime('-1 month'));
        $salaries = Salary::all();
        return view('salary.totalsalary', compact('salaries','month'));
    }
}
