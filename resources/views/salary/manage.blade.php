@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Advance Salary Taken Person</h3>
                </div>
                <div class="card-body">
                   <div class="col-md-12">
                    <table id="tableSorting" class="table table-responsive">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>Salary</th>
                                <th>Advance Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($salaries as $key=>$salary)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $salary->employee->name}}</td>

                                    <td>{{ $salary->month }}</td>
                                    <td>{{ $salary->year }}</td>
                                    <td>{{ $salary->employee->salary}}</td>
                                    <td>
                                        @if($salary->advance_salary == Null)
                                        <p>No Advnace Salary</p>
                                        @else
                                       {{ $salary->advance_salary}}
                                       @endif
                                    </td>
                                    <td>
                                        <div class="btn btn-group">
                                            <a href="{{ route('salary.edit', $salary->id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletebrand{{ $salary->id }}"><i class="far fa-trash"></i></button>
                                        </div>
                                        <!-- Modal -->
								<div class="modal fade" id="deletebrand{{ $salary->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this?</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body btn-group">
								       	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
								        <form action="{{ route('salary.destroy', $salary->id ) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
								        	<button type="submit" class="btn btn-danger btn-sm">Delete</button>
								        </form>
								      </div>
								    </div>
								  </div>
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
