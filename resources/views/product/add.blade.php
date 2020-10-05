@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Add New Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text" class="form-control" name="product_name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Code</label>
                            <input type="text" class="form-control" name="product_code" aria-describedby="emailHelp">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                           <select name="cat_id" class="form-control" id="">
                               <option value="">Select Category</option>
                               @foreach ($categories as $cat)
                                   <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                               @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Name</label>
                           <select name="sup_id" class="form-control" id="">
                               <option value="">Select Supplier</option>
                               @foreach ($suppliers as $sup)
                                   <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                               @endforeach
                           </select>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Godown/Storage</label>
                            <input type="text" class="form-control" name="product_garage" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Route</label>
                            <input type="text" class="form-control" name="product_route" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label> <br>
                            <input type="file"  name="product_image" aria-describedby="emailHelp"  accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Buying Date</label>
                            <input type="date" class="form-control" name="buy_date">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Expaire Date</label>
                            <input type="date" class="form-control" name="expire_date" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Buying Price</label>
                            <input type="number" class="form-control" name="buying_price" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Selling Price</label>
                            <input type="number" class="form-control" name="selling_price" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Product</button>
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
