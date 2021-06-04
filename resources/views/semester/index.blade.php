@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Semester List <a href="{{ route('semesters.create') }}" class="btn btn-primary btn-fill float-right">Add Semester</a></h1>

    <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>Semester</th>
            <th>Year</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($semesters as $semester)
            <tr>
                <td>{{ $semester->semester_name }}</td>
                <td>{{ $semester->year }}</td>

                <td>
                    <a href="{{route('semesters.show', $semester)}}" class="btn btn-info btn-fill btn-block">Show</a>
                </td>
                <td>
                    <a href="{{route('semesters.edit', $semester)}}" class="btn btn-success btn-fill btn-block">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('semesters.destroy', $semester) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-fill btn-block">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
