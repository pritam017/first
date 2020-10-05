@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Monthly Sale</h3>
                </div>
                <div class="btn-group">
                    <a href="{{ route("januarysale") }}" class="btn btn-info">Jan</a>
                    <a href="{{ route("februarysale") }}" class="btn btn-primary">Feb</a>
                    <a href="{{ route("marchsale") }}" class="btn btn-info">March</a>
                    <a href="{{ route("aprilsale") }}" class="btn btn-primary">April</a>
                    <a href="{{ route("maysale") }}" class="btn btn-info">May</a>
                    <a href="{{ route("junesale") }}" class="btn btn-primary">June</a>
                    <a href="{{ route("julysale") }}" class="btn btn-info">July</a>
                    <a href="{{ route("augustsale") }}" class="btn btn-primary">Aug</a>
                    <a href="{{ route("septembersale") }}" class="btn btn-info">Sep</a>
                    <a href="{{ route("octobersale") }}" class="btn btn-primary">Oct</a>
                    <a href="{{ route("novembersale") }}" class="btn btn-info">Nov</a>
                    <a href="{{ route("decembersale") }}" class="btn btn-primary">Dec</a>
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
                    <h3>Monthly Sale : {{ $total }}</h3>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
