@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Course List <a href="{{ route('courses.create') }}" class="btn btn-primary btn-fill float-right">Add Course</a></h1>

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
                    <a href="{{route('courses.show', $course)}}" class="btn btn-info btn-fill btn-block">Show</a>
                </td>
                <td>
                    <a href="{{route('courses.edit', $course)}}" class="btn btn-success btn-fill btn-block">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('courses.destroy', $course) }}" >
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
