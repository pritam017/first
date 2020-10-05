@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3>Add Attendence {{ date("d-m-y") }}</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>

                                <th>Name</th>
                                <th>Photo</th>
                                <th>Attendence</th>
                            </tr>
                        </thead>
                            <tbody>
                                <form action="{{ route('attendence.store') }}" method="POST">
                                    @csrf
                                @foreach ($employees as $emp)
                                <tr>

                                    <td>{{ $emp->name }}</td>
                                    <td>
                                        <img src="{{ asset('images/employee/'. $emp->photo) }}" width="50" alt="">
                                    </td>
                            <input type="hidden" name="employee_id[]" value="{{ $emp->id }}">
                                    <td>
                                 <input type="radio" required name="attendence[{{ $emp->id }}]" value="Present"> Present
                                 <input type="radio" required name="attendence[{{ $emp->id }}]" value="Absence"> Absence
                                    </td>
                                    <input type="hidden" name="attn_date" value="{{ date("d/m/y") }}">
                                    <input type="hidden" name="month" value="{{ date("F") }}">
                                    <input type="hidden" name="attn_year" value="{{ date("Y") }}">
                                </tr>

                                @endforeach


                            </tbody>
                    </table>
                    <input type="submit" class="btn btn-info" value="Take Attendence">
                </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
