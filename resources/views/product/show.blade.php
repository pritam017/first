@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Details Product</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="well well-sm">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <img src="{{ asset('images/product/'. $product->product_image) }}" alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-8 col-md-8">
                                            <h4>
                                              Name:  {{ $product->product_name }}</h4> <b>Category:</b>
                                            <small><cite title="San Francisco, USA">{{ $product->category->cat_name }} <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small> <br>
                                            <b>Supplier:</b>
                                            <small><cite title="San Francisco, USA">{{ $product->supplier->name }} <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                            <p>
                                                <b>Product Code:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $product->product_code }}
                                                <br />
                                                <b>Product Storage:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $product->product_garage }}
                                                <br />
                                                <b>Product Route:</b> <i class="glyphicon glyphicon-gift"></i>{{ $product->product_route }}
                                                <br />
                                                <b>Buying Date:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $product->buy_date }}
                                                <br />
                                                <b>Expaire Date:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $product->expire_date }}<br />
                                                <b>Buying Price:</b>: <i class="glyphicon glyphicon-envelope"></i>{{ $product->buying_price }}<br />
                                                <b>Selling Price:</b> <i class="glyphicon glyphicon-envelope"></i>{{ $product->selling_price }}<br />

                                            </p>
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
