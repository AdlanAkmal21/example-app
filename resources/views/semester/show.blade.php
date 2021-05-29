@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Semester</h1>
    <a href="{{ route('semesters.index') }}" class="btn btn-secondary my-3">Semester List</a>

    <div class="form-group">
        <label for="semester_name">Semester Name:</label>
        <input type="text" disabled class="form-control" name="semester_name" id="semester_name" value="{{ $semester->semester_name }}">
    </div>

    <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" disabled class="form-control" name="year" id="year" value="{{ $semester->year }}">
    </div>

</div>

@endsection
