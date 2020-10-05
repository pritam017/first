<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendence = Attendence::select('edit_date')->groupBy('edit_date')->get();
        return view('attendence.all', compact('attendence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('attendence.add', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->attn_date;
        $attn_date = Attendence::where('attn_date', $date)->first();

        if($attn_date){
            Toastr::error('Today Attendence Already Taken');
            return redirect()->back();
        }else{


        foreach($request->employee_id as $row){
            $data[] = [
                'employee_id' => $row,
                'attendence' => $request->attendence[$row],
                'attn_date' => $request->attn_date,
                'attn_year' => $request->attn_year,
                'month' => $request->month,

                'edit_date' => date('d_m_y'),

            ];

        }
        Attendence::insert($data);
        Toastr::success('Data Seved');
        return redirect()->back();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($edit_date)
    {

        $date = Attendence::where('edit_date', $edit_date)->first();
        $data = Attendence::where('edit_date', $edit_date)->get();
        return view('attendence.edit', compact('data', 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        foreach($request->id as $id){
            $data = [

                'attendence' => $request->attendence[$id],
                'attn_date' => $request->attn_date,
                'attn_year' => $request->attn_year,


            ];
            $attendence = Attendence::where(['attn_date' => $request->attn_date, 'id'=> $id])->first();
            $attendence->update($data);
        }

        Toastr::success('Data Updated');
        return redirect()->back();
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
