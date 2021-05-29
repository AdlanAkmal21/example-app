@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Course</h1>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary my-3">Course List</a>

    <div class="form-group">
        <label for="course_code">Course Code:</label>
        <input type="text" class="form-control" name="course_code" id="course_code" value="{{ $course->course_code }}">
    </div>

    <div class="form-group">
        <label for="course_name">Course Name:</label>
        <input type="text" class="form-control" name="course_name" id="course_name" value="{{ $course->course_name }}">
    </div>

</div>

@endsection
