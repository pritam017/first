@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Monthly Expense</h3>
                </div>
                <div class="btn-group">
                    <a href="{{ route("january") }}" class="btn btn-info">Jan</a>
                    <a href="{{ route("february") }}" class="btn btn-primary">Feb</a>
                    <a href="{{ route("march") }}" class="btn btn-info">March</a>
                    <a href="{{ route("april") }}" class="btn btn-primary">April</a>
                    <a href="{{ route("may") }}" class="btn btn-info">May</a>
                    <a href="{{ route("june") }}" class="btn btn-primary">June</a>
                    <a href="{{ route("july") }}" class="btn btn-info">July</a>
                    <a href="{{ route("august") }}" class="btn btn-primary">Aug</a>
                    <a href="{{ route("september") }}" class="btn btn-info">Sep</a>
                    <a href="{{ route("october") }}" class="btn btn-primary">Oct</a>
                    <a href="{{ route("november") }}" class="btn btn-info">Nov</a>
                    <a href="{{ route("december") }}" class="btn btn-primary">Dec</a>
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



                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <h3>Monthly Expense : {{ $total }}</h3>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
