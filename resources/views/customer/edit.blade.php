@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Customer</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Customer Name</label>
                          <input type="text" class="form-control" value="{{ $customer->name }}" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Phone</label>
                            <input type="number" class="form-control" value="{{ $customer->phone }}"name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Address</label>
                            <input type="text" class="form-control" value="{{ $customer->address }}" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Shopname</label>
                            <input type="text" class="form-control" value="{{ $customer->shop_name }}"name="shop_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                              <img src="{{ asset('images/customer/' . $customer->photo) }}" width="50" alt=""> <br>
                            <label for="exampleInputEmail1">Customer Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Account Holder</label>
                            <input type="text" value="{{ $customer->account_holder }}"class="form-control" name="account_holder" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Account Number</label>
                            <input type="text"  class="form-control" value="{{ $customer->account_number }}" name="account_number" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" value="{{ $customer->bank_name }}"  class="form-control" name="bank_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Branch</label>
                            <input type="text" value="{{ $customer->bank_branch }}" class="form-control" name="bank_branch" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer City</label>
                            <input type="text" class="form-control" value="{{ $customer->city }}" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Upadate Customer</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
