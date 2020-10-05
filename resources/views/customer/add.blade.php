@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Add New Customer</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('customer.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Customer Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Phone</label>
                            <input type="number" class="form-control" name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Shopname</label>
                            <input type="text" class="form-control" name="shop_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Account Holder</label>
                            <input type="text" class="form-control" name="account_holder" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer Account Number</label>
                            <input type="text" class="form-control" name="account_number" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Bank Branch</label>
                            <input type="text" class="form-control" name="bank_branch" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Customer City</label>
                            <input type="text" class="form-control" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Customer</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function readURL(input){
if(input.files && input.files[0]){
    var reder = new FileReader();
    reader.onload = function(e) {
        $('#image')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
    };
    reader.readAsDataURL(input.files[0]);
}
}
</script>
@endsection
