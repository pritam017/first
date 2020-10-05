@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Expense</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('expense.update', $expense->id) }}"  method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Expense Details</label>
                          <textarea name="details" id="" class="form-control" cols="20" rows="10">{{ $expense->details }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Expense Amount</label>
                            <input type="text" class="form-control" name="amount" value="{{ $expense->amount }}" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">

                            <input type="hidden" class="form-control" name="month" value="{{ date("F") }}"aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="date" value="{{ date("d/m/y") }}"aria-describedby="emailHelp">
                            <input type="hidden" class="form-control" name="year" value="{{ date("Y") }}"aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Expense</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
