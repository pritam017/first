@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Product</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text" class="form-control" value="{{ $product->product_name  }}" name="product_name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Code</label>
                            <input type="text" class="form-control" value="{{ $product->product_code  }}" name="product_code" aria-describedby="emailHelp">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                           <select name="cat_id" class="form-control" id="">
                               <option value="">Select Category</option>
                               @foreach ($categories as $cat)
                                   <option value="{{ $cat->id }}" {{ $cat->id == $product->cat_id ? 'selected' : '' }}>{{ $cat->cat_name }}</option>
                               @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Supplier Name</label>
                           <select name="sup_id" class="form-control" id="">
                               <option value="">Select Supplier</option>
                               @foreach ($suppliers as $sup)
                                   <option value="{{ $sup->id }}" {{ $sup->id == $product->sup_id ? 'selected' : '' }}>{{ $sup->name }}</option>
                               @endforeach
                           </select>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Godown/Storage</label>
                            <input type="text" class="form-control" value="{{ $product->product_garage  }}" name="product_garage" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Route</label>
                            <input type="text" class="form-control" value="{{ $product->product_route  }}" name="product_route" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                              <img src="{{ asset('images/product/'. $product->product_image) }}" width="50"alt="">
                            <label for="exampleInputEmail1">Product Image</label> <br>
                            <input type="file"  name="product_image" aria-describedby="emailHelp"  accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Buying Date</label>
                            <input type="date" value="{{ $product->buy_date  }}" class="form-control" name="buy_date">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Expaire Date</label>
                            <input type="date" value="{{ $product->expire_date  }}" class="form-control" name="expire_date" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Buying Price</label>
                            <input type="number" value="{{ $product->buying_price  }}" class="form-control" name="buying_price" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Selling Price</label>
                            <input type="number" value="{{ $product->selling_price  }}" class="form-control" name="selling_price" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Update Product</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
