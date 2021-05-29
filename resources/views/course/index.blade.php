@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Course List</h1>

    <a href="{{ route('courses.create') }}" class="btn btn-primary my-3">Add Course</a>

    <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->course_name }}</td>

                <td>
                    <a href="{{route('courses.show', $course)}}" class="btn btn-info btn-block">Show</a>
                </td>
                <td>
                    <a href="{{route('courses.edit', $course)}}" class="btn btn-success btn-block">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('courses.destroy', $course) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
