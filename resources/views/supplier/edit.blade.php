@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Supplier</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('supplier.update', $supplier->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Supplier Name</label>
                          <input type="text" class="form-control" value="{{ $supplier->name }}" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $supplier->email }}" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Phone</label>
                            <input type="number" class="form-control" value="{{ $supplier->phone }}"name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Address</label>
                            <input type="text" class="form-control" value="{{ $supplier->address }}" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Type</label>
                            <select name="type" class="form-control" id="">
                                <option value="">Select Supplier Type</option>
                                <option value="Distributor" {{ $supplier->type == 'Distributor' ? 'selected' : NULL }}>Distributor</option>
                                <option value="Whole Seller"{{ $supplier->type == 'Whole Seller' ? 'selected' : NULL }}>Whole Seller</option>
                                <option value="Dealer"{{ $supplier->type == 'Dealer' ? 'selected' : NULL }}>Dealer</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Shopname</label>
                            <input type="text" class="form-control" value="{{ $supplier->shop_name }}"name="shop_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                              <img src="{{ asset('images/Supplier/' . $supplier->photo) }}" width="50" alt=""> <br>
                            <label for="exampleInputEmail1">Supplier Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Account Holder</label>
                            <input type="text" value="{{ $supplier->account_holder }}"class="form-control" name="account_holder" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Account Number</label>
                            <input type="text"  class="form-control" value="{{ $supplier->account_number }}" name="account_number" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" value="{{ $supplier->bank_name }}"  class="form-control" name="bank_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Branch</label>
                            <input type="text" value="{{ $supplier->branch_name }}" class="form-control" name="branch_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Supplier City</label>
                            <input type="text" class="form-control" value="{{ $supplier->city }}" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Upadate Supplier</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
