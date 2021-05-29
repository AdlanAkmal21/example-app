@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">

                    <div class="form-group text-center">
                        <h2>Welcome {{ Auth::user()->name }}! </h2>
                        <h5>Below are some of the functions/features to get started.</h5>
                    </div>

                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('courses.index') }}" type="button" class="btn btn-warning btn-block">Course</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('programmes.index') }}" type="button" class="btn btn-primary btn-block">Programme</a>
                        </div>

                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('groups.index') }}" type="button" class="btn btn-secondary btn-block">Group</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('semesters.index') }}" type="button" class="btn btn-success btn-block">Semester</a>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('users.index') }}" type="button" class="btn btn-info btn-block">User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
