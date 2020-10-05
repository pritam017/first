@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Details Supplier</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="well well-sm">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <img src="{{ asset('images/supplier/'. $supplier->photo) }}" alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-8 col-md-8">
                                            <h4>
                                              Name:  {{ $supplier->name }}</h4> <b>Address:</b>
                                            <small><cite title="San Francisco, USA">{{ $supplier->address }} <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                            <p>
                                                <b>Email:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->email }}
                                                <br />
                                                <b>Phone:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->phone }}
                                                <br />
                                                <b>Shop Name:</b> <i class="glyphicon glyphicon-gift"></i>{{ $supplier->shop_name }}
                                                <br />
                                                <b>Account Holder:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->account_holder }}
                                                <br />
                                                <b>Supplier Type:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->type }}
                                                <br />
                                                <b>Account Number:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->account_number }}<br />
                                                <b>Bank Name:</b>: <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->bank_name }}<br />
                                                <b>Bank Branch:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->branch_name }}<br />
                                                <b>City:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $supplier->city }}
                                            </p>

                                            <!-- Split button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">
                                                    Social</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span><span class="sr-only">Social</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                                    <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Github</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
