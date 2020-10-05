@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Salary</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('salary.update', $salary->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Employee Name</label>
                          <select name="emp_id" class="form-control" id="">
                              <option value="">Add Employee Name</option>
                                @foreach ($employee as $emp)
                                    <option value="{{ $emp->id }}" {{ $salary->emp_id == $emp->id ? 'selected': ''}}>{{ $emp->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salary Month</label>
                            <input type="text" class="form-control" value="{{ $salary->month }}" name="month" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Salary Year</label>
                            <input type="number" class="form-control" value="{{ $salary->year }}"name="year" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Advance Salary</label>
                            <input type="text" class="form-control"  value="{{ $salary->advance_salary }}" name="advance_salary" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">Update Salary</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
