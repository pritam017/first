@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>All Product</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table table-responsive">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Product Category</th>
                                <th>Product Supplier</th>
                                <th>Product Code</th>
                                <th>Product Image</th>
                                <th>Selling Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($products as $key=>$product)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->category->cat_name }}</td>
                                    <td>{{ $product->supplier->name }}</td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>
                                        <img src="{{ asset('images/product/'. $product->product_image) }}" width="50" alt="">
                                    </td>
                                    <td>{{ $product->selling_price }}</td>

                                    <td>
                                        <div class="btn btn-group">
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletebrand{{ $product->id }}"><i class="far fa-trash"></i></button>
                                        </div>
                                        <!-- Modal -->
								<div class="modal fade" id="deletebrand{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Do You want to delete this?</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body btn-group">
								       	<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Cancel</button>
								        <form action="{{ route('product.destroy', $product->id ) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
								        	<button type="submit" class="btn btn-danger btn-sm">Delete</button>
								        </form>
								      </div>
								    </div>
								  </div>
								</div>
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
