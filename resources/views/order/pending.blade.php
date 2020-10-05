@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>All Pending Order</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table table-responsive">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Order Date</th>
                                <th>Total Products</th>
                                <th>Total Amount</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($pending_order as $key=>$row)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->order_date }}</td>
                                    <td>{{ $row->total_products }}</td>
                                    <td>{{ $row->total }}</td>
                                    <td>{{ $row->payment_status }}</td>
                                    <td>{{ $row->order_status }}</td>
<td>
    <a href="{{ route('order.show', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
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

@endsection
