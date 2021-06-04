@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    <h4 class="card-title">Dashboard</h4>
                    <p class="card-category">Admin Dashboard</p>
                </div>
                <div class="card-body">

                    <div class="form-group text-center">
                        <h3>Welcome {{ Auth::user()->name }}!</h3>
                        <h5>Below are some of the functions/features to get started.</h5>
                    </div>

                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('courses.index') }}" type="button" class="btn btn-warning btn-fill btn-block">Course</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('programmes.index') }}" type="button" class="btn btn-primary btn-fill btn-block">Programme</a>
                        </div>

                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('groups.index') }}" type="button" class="btn btn-secondary btn-fill btn-block">Group</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('semesters.index') }}" type="button" class="btn btn-success btn-fill btn-block">Semester</a>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <a href="{{ route('users.index') }}" type="button" class="btn btn-info btn-fill btn-block">User</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
