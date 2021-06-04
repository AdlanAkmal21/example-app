@extends('layouts.app')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header">Create Form</div>
        <div class="card-body">
            <form action="{{ route('forms.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="programme_id">Programme:</label>
                            <select name="programme_id" id="programme_id" class="form-control">
                                <option value="" selected disabled>Choose Programme</option>
                                @foreach ($programmes as $programme)
                                <option value="{{ $programme->id }}">{{ $programme->programme_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="group_id">Group</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="" selected disabled>Choose Group</option>
                        @foreach ($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <select name="course_id[]" id="course_id" class="form-control">
                                    <option value="" selected disabled>Choose Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecture_hour">Lecture Hour</label>
                            <input type="number" class="form-control" name="lecture_hour[]" id="lecture_hour">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecturer_name">Lecturer Name</label>
                            <input type="text" class="form-control" name="lecturer_name[]" id="lecturer_name">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <select name="course_id[]" id="course_id" class="form-control">
                                    <option value="" selected disabled>Choose Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecture_hour">Lecture Hour</label>
                            <input type="number" class="form-control" name="lecture_hour[]" id="lecture_hour">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecturer_name">Lecturer Name</label>
                            <input type="text" class="form-control" name="lecturer_name[]" id="lecturer_name">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <select name="course_id[]" id="course_id" class="form-control">
                                    <option value="" selected disabled>Choose Course</option>
                                @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecture_hour">Lecture Hour</label>
                            <input type="number" class="form-control" name="lecture_hour[]" id="lecture_hour">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lecturer_name">Lecturer Name</label>
                            <input type="text" class="form-control" name="lecturer_name[]" id="lecturer_name">
                        </div>
                    </div>
                </div>

                <div class="form-row form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
