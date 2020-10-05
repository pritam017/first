@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Setting</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('setting.update', $setting->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
@method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Company Name</label>
                          <input type="text" class="form-control" value="{{$setting->company_name  }}" name="company_name" aria-describedby="emailHelp">
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Address</label>
                                <input type="text" value="{{ $setting->company_address }}"  class="form-control" name="company_address" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Email</label>
                                <input type="email" value="{{ $setting->company_email }}"class="form-control" name="company_email" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Phone</label>
                                <input type="text" value="{{ $setting->company_phone }}" class="form-control" name="company_phone" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Logo</label>
                                <img src="{{ URL::to($setting->company_logo) }}" alt="">
                                <input type="file" class="form-control" name="company_logo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Mobile</label>
                                <input type="text" value="{{ $setting->company_mobile }}" class="form-control" name="company_mobile" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company City</label>
                                <input type="text" value="{{ $setting->company_city }}" class="form-control" name="company_city" aria-describedby="emailHelp">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Company Country</label>
                                <input type="text" value="{{ $setting->company_country }}" class="form-control" name="company_country" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Zip</label>
                                <input type="text" value="{{ $setting->company_zip_code }}" class="form-control" name="company_zip_code" aria-describedby="emailHelp">
                            </div>
                        <button type="submit" class="btn btn-primary">Updatet</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
