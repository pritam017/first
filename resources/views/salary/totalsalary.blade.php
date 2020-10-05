@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>All Salary ({{ date("M Y") }})</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-12">
                    <table id="tableSorting" class="table table-responsive">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Photo</th>
                                <th>Month</th>
                                <th>Salary</th>
                                <th>Advance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($salaries as $key=>$salary)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $salary->employee->name}}</td>
<td><img src="{{ asset('images/employee/' . $salary->employee->photo ) }}" width="50" alt=""></td>
                                    <td><span class="badge badge-pill badge-success">{{  $month }}</span></td>

                                    <td>{{ $salary->employee->salary}}</td>
                                    <td>{{ $salary->advance_salary}}</td>

                                    <td>
                                        <div class="btn btn-group">
                                            <a href="" class="btn btn-primary btn-sm">Pay Now</a>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                   </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
