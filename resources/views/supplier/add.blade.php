@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Add New Supplier</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('supplier.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Supplier Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Phone</label>
                            <input type="number" class="form-control" name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Type</label>
                            <select name="type" class="form-control" id="">
                                <option value="">Select Supplier Type</option>
                                <option value="1">Distributor</option>
                                <option value="2">Whole Seller</option>
                                <option value="3">Dealer</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Shopname</label>
                            <input type="text" class="form-control" name="shop_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Account Holder</label>
                            <input type="text" class="form-control" name="account_holder" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Account Number</label>
                            <input type="text" class="form-control" name="account_number" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Branch</label>
                            <input type="text" class="form-control" name="branch_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier City</label>
                            <input type="text" class="form-control" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Supplier</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
