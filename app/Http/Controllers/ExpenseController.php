<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ExpenseController extends Controller
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
$total = Expense::where('month', $month)->sum('amount');
        $expenses = Expense::where('month', $month)->get();
       return view('expense.monthly', compact('expenses','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('expense.add');
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
            'details' => 'required',
            'amount' => 'required',
        ]);


        $expense = new Expense();

        $expense->amount = $request->amount;
        $expense->details = $request->details;
        $expense->date = $request->date;
        $expense->year = $request->year;
        $expense->month = $request->month;

        $expense->save();

        Toastr::success('Data Save Successfully');
        return redirect()->route('expense.index');
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

        $expense = Expense::findOrFail($id);
        return view('expense.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $request->validate([
        'details' => 'required',
        'amount' => 'required',
    ]);


    $expense = Expense::find($id);

    $expense->amount = $request->amount;
    $expense->details = $request->details;
    $expense->date = $request->date;
    $expense->year = $request->year;
    $expense->month = $request->month;

    $expense->save();

    Toastr::success('Data Update Successfully');
    return redirect()->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = Expense::find($id);


            $expense->delete();

        Toastr::success('Data Deleted Successfully');
        return redirect()->route('expense.index');
    }
    public function todayexpense(){
        $date = date('d/m/y');
        $expenses = Expense::where('date', $date)->get();
        $total = Expense::where('date', $date)->sum('amount');
        return view('expense.todayexpense', compact('expenses','total'));
    }
    public function yearly(){
        $monthly = date('Y');
        $expenses = Expense::where('year', $monthly)->get();
        $total = Expense::where('year', $monthly)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function january(){
        $month = "January";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function february(){
        $month = "February";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function march(){
        $month = "March";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function april(){
        $month = "April";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function may(){
        $month = "May";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function june(){
        $month = "June";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function july(){
        $month = "July";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function august(){
        $month = "August";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function september(){
        $month = "September";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
    public function october(){
        $month = "October";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }public function november(){
        $month = "November";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }public function december(){
        $month = "December";
        $expenses = Expense::where('month', $month)->get();
        $total = Expense::where('month', $month)->sum('amount');
        return view('expense.monthly', compact('expenses','total'));
    }
}
