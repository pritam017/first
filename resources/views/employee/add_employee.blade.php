@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Add New Employee</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Employee Name</label>
                          <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Phone</label>
                            <input type="number" class="form-control" name="phone" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Education</label>
                            <input type="text" class="form-control" name="education" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Experience</label>
                            <input type="text" class="form-control" name="experience" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">

                            <label for="exampleInputEmail1">Employee Photo</label>
                            <input type="file" class="form-control" name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee NID</label>
                            <input type="number" class="form-control" name="nid" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Salary</label>
                            <input type="text" class="form-control" name="salary" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee Vacation</label>
                            <input type="text" class="form-control" name="vacation" aria-describedby="emailHelp">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Employee City</label>
                            <input type="text" class="form-control" name="city" aria-describedby="emailHelp">
                          </div>
                        <button type="submit" class="btn btn-primary">Add New Employee</button>
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
