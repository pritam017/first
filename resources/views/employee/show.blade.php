@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                  <h3>Details Employee</h3>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="well well-sm">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <img src="{{ asset('images/employee/'. $employee->photo) }}" alt="" class="img-rounded img-responsive" />
                                        </div>
                                        <div class="col-sm-8 col-md-8">
                                            <h4>
                                              Name:  {{ $employee->name }}</h4> Address:
                                            <small><cite title="San Francisco, USA">{{ $employee->address }} <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                            <p>
                                               Email: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->email }}
                                                <br />
                                                Phone: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->phone }}
                                                <br />
                                                Education: <i class="glyphicon glyphicon-gift"></i>{{ $employee->education }}
                                                <br />
                                                Experience: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->experience }}
                                                <br />
                                                NID NO: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->nid_no }}<br />
                                               Salary: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->salary }}<br />
                                               Vacation: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->vacation }}<br />
                                                City: <i class="glyphicon glyphicon-envelope"></i>{{ $employee->city }}
                                            </p>

                                            <!-- Split button -->
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">
                                                    Social</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span><span class="sr-only">Social</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Twitter</a></li>
                                                    <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                                    <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Github</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
