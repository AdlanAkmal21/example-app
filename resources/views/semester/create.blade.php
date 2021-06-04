@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Create Semester <a href="{{ route('semesters.index') }}" class="btn btn-secondary btn-fill float-right">Semester List</a></h1>


    <form method="POST" action="{{ route('semesters.store') }}">
        @csrf

        <div class="form-group">
            <label for="semester_name">Semester Name:</label>
            <input type="text" class="form-control" name="semester_name" id="semester_name">
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" name="year" id="year">
        </div>

        <button type="submit" class="btn btn-primary btn-fill my-3">Add Semester</button>
    </form>
</div>

@endsection
