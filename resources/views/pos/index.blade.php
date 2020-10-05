@extends('layouts.app') @section('content')

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <div class="breadcrumbs bg-info">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>POS (Point Of Sales)</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Echovel</li>
                        <li class="">{{ date('d/m/y') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="portfolioFilter">
                    @foreach ($category as $cat)
                    <a href="" data-filter="" class="current btn btn-primary">{{ $cat->cat_name }}</a>
                    @endforeach
                </div>
            </div>
            <br>
            <br>
            <div class="col-md-5">


                <br>
                <br>

                    <div class="price-card text-center">
                    <table>
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $content = Cart::content(); @endphp
                        <tbody>

                            @foreach ($content as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="{{ route('update', $item->rowId) }}" method="POST">
                                        @csrf
                                        <input type="number" name="qty" style="width: 40px;" value="{{ $item->qty }}">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{  $item->price}}</td>
                                <td>{{ $item->price*$item->qty }}</td>
                                <td>
                                    <a href="{{ route('remove', $item->rowId) }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div class="pricing-footer bg-primary text-light">
                        <h6>Quantity: {{ Cart::count() }}</h6>
                        <h6>Sub Total: {{ Cart::subTotal() }}</h6>
                        <h6>Vat: {{ Cart::tax() }}</h6>
                        <hr>
                        <h5>Total:{{ Cart::total() }}</h5>
                    </div>
                    <br>

                    <form action="{{ route('invoice') }}" method="POST">
                        @csrf
                        <br>
                        <h5>Select Costomer
                            <a
                                href=""
                                class="btn btn-primary pull-right waves-effect waves-light"
                                data-toggle="modal"
                                data-target="#com-close-modal">Add Customer</a>
                        </h5> <br>
                        <select name="cst_id" required class="form-control" id="">
                            <option value="">Select Customer</option>
                            @foreach ($customers as $cst)
                            <option value="{{ $cst->id }}">{{ $cst->name }}</option>
                            @endforeach
                        </select>
                        <br>

                    <button type="submit" class="btn btn-primary">Create Invoice</button>
                </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Product Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    <img
                                        src="{{ asset('images/product/'. $product->product_image) }}"
                                        width="40"
                                        alt=""></td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->category->cat_name }}</td>
                                <td>{{ $product->product_code }}</td>
                                <form action="{{ route('add-cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                                    <input type="hidden" name="selling_price" value="{{ $product->selling_price }}">
                                    <input type="hidden" name="qty" value="1">
                                    <td>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-plus-square" style="width: 30px"></i>
                                        </button>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- .content -->
</div>
<!-- /#right-panel -->

<!-- Modal -->
<div
    id="com-close-modal"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Add New Customer</h4>
                <button class="close" data-dismiss="modal" aria-hidden="true">
                    X
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">

                        <form
                            action="{{ route('customer.store') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Phone</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="phone"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Address</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="address"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Shopname</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="shop_name"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Photo</label>
                                <input
                                    type="file"
                                    class="upload"
                                    name="photo"
                                    required="required"
                                    accept="image/*"
                                    onchange="readURL(this);">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Account Holder</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="account_holder"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Account Number</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="account_number"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bank Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="bank_name"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bank Branch</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="bank_branch"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer City</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="city"
                                    required="required"
                                    aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Add New Customer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
