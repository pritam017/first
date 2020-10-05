@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                  <h3>All Category</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($categories as $key=>$cat)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $cat->cat_name }}</td>

                                    <td>
                                        <div class="btn btn-group">
                                            <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletebrand{{ $cat->id }}"><i class="far fa-trash"></i></button>
                                        </div>
                                        <!-- Modal -->
								<div class="modal fade" id="deletebrand{{ $cat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								        <form action="{{ route('category.destroy', $cat->id ) }}" method="POST">
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
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                  <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>

                        <button type="submit" class="btn btn-primary">Add New Category</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
