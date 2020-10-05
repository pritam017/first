@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Yearly Expense</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Expense Amount</th>
                                <th>Expense Details</th>
                                <th>Expense Date</th>
                                <th>Expense Month</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($expenses as $key=>$expense)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->details }}</td>
                                    <td><span class="badge badge-primary">{{ $expense->date }}</span></td>
                                    <td><span class="badge badge-info">{{ $expense->month }}</span></td>


                                    <td>
                                        <div class="btn btn-group">
                                            <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletebrand{{ $expense->id }}"><i class="far fa-trash"></i></button>
                                        </div>
                                        <!-- Modal -->
								<div class="modal fade" id="deletebrand{{ $expense->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								        <form action="{{ route('expense.destroy', $expense->id ) }}" method="POST">
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
                <div class="card-footer">
                    <h3>{{ date('Y') }} Expense : {{ $total }}</h3>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
