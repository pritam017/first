@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3>Product Import</h3>
                </div>
                <a href="{{ route('export') }}" class="btn btn-primary">Download</a>
                <div class="card-body">
                    <form action="{{ route('import') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">File Import</label> <br>
                          <input type="file" name="import_file" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
