@extends('layouts.app')
@section('content')

<div class="container">

    <h1>Form List <a href="{{ route('forms.create') }}" class="btn btn-primary float-right">Create Form</a></h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Coordinator Name</th>
                <th>Programme</th>
                <th>Group</th>
                <th>Course</th>
                <th>Lecture Hour</th>
                <th>Lecturer Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($forms as $form)
            <tr>
                <td>{{ $form->coordinators->name }}</td>
                <td>{{ $form->programmes->programme_name }}</td>
                <td>{{ $form->groups->group_name }}</td>
                <td>{{ $form->courses->course_name }}</td>
                <td>{{ $form->lecture_hour }}</td>
                <td>{{ $form->lecturer_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
