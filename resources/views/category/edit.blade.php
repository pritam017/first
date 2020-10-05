@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Update Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <input type="text" class="form-control" value="{{ $category->cat_name }}" name="name" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Category</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
