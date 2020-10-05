@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Add Expense</h3>
                  <a href="" class="pull-right btn btn-primary">Today</a>
                  <a href="" class="pull-right btn btn-info">This Month</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('expense.store') }}"  method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Expense Details</label>
                          <textarea name="details" id="" class="form-control" cols="20" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Expense Amount</label>
                            <input type="text" class="form-control" name="amount" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">

                            <input type="hidden" class="form-control" name="month" value="{{ date("F") }}"aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="date" value="{{ date("d/m/y") }}"aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="year" value="{{ date("Y") }}"aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Add Expense</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
