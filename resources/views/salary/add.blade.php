@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Provide Advance Salary</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('salary.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Employee Name</label>
                          <select name="emp_id" class="form-control" id="">
                              <option value="">Add Employee Name</option>
                                @foreach ($employee as $emp)
                                    <option value="{{ $emp->id }}">{{ $emp->name }}</option>
                                @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Month</label>
                            <input type="text" class="form-control" name="month" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Year</label>
                            <input type="text" class="form-control" name="year" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Advance Salary</label>
                            <input type="text" class="form-control"  name="advance_salary" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">Add Advance Salary</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
