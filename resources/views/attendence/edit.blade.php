@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3>Edit Attendence {{ date("d-m-y") }}</h3>
                </div>
                <div class="card-body">
                    <table id="tableSorting" class="table">
                        <thead class="bg-info">
                            <tr>

                                <th>Name</th>
<th>Photo</th>
                                <th>Attendence {{ $date->attn_date }}</th>
                            </tr>
                        </thead>
                            <tbody>
                                <form action="{{ route('attendence.update', $date->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                @foreach ($data as $emp)

                                <tr>

                                    <td>{{ $emp->employee->name }}</td>
                                        <td>
                                            <img src="{{ asset('images/employee/' . $emp->employee->photo ) }}" width="50" alt="">
                                        </td>
                            <input type="hidden" name="id[]" value="{{ $emp->id }}">
                                    <td>
                                 <input type="radio" required name="attendence[{{ $emp->id }}]" value="Present"  {{ $emp->attendence == 'Present' ? 'checked' : '' }}> Present
                                 <input type="radio" required name="attendence[{{ $emp->id }}]" value="Absence"   {{ $emp->attendence == 'Absence' ? 'checked' : '' }}> Absence
                                    </td>
                                    <input type="hidden" name="attn_date" value="{{ date("d/m/y") }}">
                                    <input type="hidden" name="attn_year" value="{{ date("Y") }}">
                                </tr>

                                @endforeach


                            </tbody>
                    </table>
                    <input type="submit" class="btn btn-info" value="Update Attendence">
                </form>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
