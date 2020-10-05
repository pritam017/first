@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Todays Sales</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Sale Amount</th>
                                <th>Total Product</th>
                                <th>Customer Name</th>
                                <th>Sale Date</th>
                                <th>Expense Month</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($sales as $key=>$sale)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $sale->sub_total }}</td>
                                    <td>{{ $sale->customer->name }}</td>
                                    <td>{{ $sale->total_products }}</td>
                                    <td><span class="badge badge-primary">{{ $sale->date }}</span></td>
                                    <td><span class="badge badge-info">{{ $sale->month }}</span></td>



                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <h3>Total Expense : {{ $total }}</h3>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
