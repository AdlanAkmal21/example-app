@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Edit Semester <a href="{{ route('semesters.index') }}" class="btn btn-secondary btn-fill float-right">Semester List</a></h1>


    <form method="POST" action="{{ route('semesters.update', $semester) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="semester_name">Semester Name:</label>
            <input type="text" class="form-control" name="semester_name" id="semester_name" value="{{ $semester->semester_name }}">
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" class="form-control" name="year" id="year" value="{{ $semester->year }}">
        </div>

        <button type="submit" class="btn btn-success btn-fill my-3">Update Semester</button>
    </form>
</div>

@endsection
