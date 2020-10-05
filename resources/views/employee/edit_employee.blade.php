@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Employee</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.update',$employee->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Employee Name</label>
                          <input type="text" value="{{ $employee->name }}" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Email</label>
                            <input type="email" value="{{ $employee->email }}" class="form-control" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Phone</label>
                            <input type="number" value="{{ $employee->phone }}" class="form-control" name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Address</label>
                            <input type="text"  value="{{ $employee->address }}"class="form-control" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Education</label>
                            <input type="text" value="{{ $employee->education }}" class="form-control" name="education" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Experience</label>
                            <input type="text" value="{{ $employee->experience }}" class="form-control" name="experience" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
<img src="{{ asset('images/employee/'. $employee->photo) }}" width="70" alt="">
                            <label for="exampleInputEmail1">Employee Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee NID</label>
                            <input type="number" value="{{ $employee->nid_no }}" class="form-control" name="nid" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Salary</label>
                            <input type="text" value="{{ $employee->salary }}" class="form-control" name="salary" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Vacation</label>
                            <input type="text" value="{{ $employee->vacation }}" class="form-control" name="vacation" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee City</label>
                            <input type="text" value="{{ $employee->city }}"class="form-control" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Employee</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
