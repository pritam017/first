@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  <h3>All Attendence</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Attendence Date</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($attendence as $key=>$att)
                                <tr>
                                    <td>{{ $key+=1 }}</td>
                                    <td>{{ $att->edit_date }}</td>


<td>
                                        <div class="btn btn-group">
                                            <a href="{{ route('attendence.edit', $att->edit_date) }}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></a>


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
