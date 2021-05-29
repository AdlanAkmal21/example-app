@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Group</h1>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary my-3">Group List</a>

    <div class="form-group">
        <label for="group_code">Group Code:</label>
        <input disabled type="text" class="form-control" name="group_code" id="group_code" value="{{ $group->group_code }}">
    </div>

    <div class="form-group">
        <label for="group_name">Group Name:</label>
        <input disabled type="text" class="form-control" name="group_name" id="group_name" value="{{ $group->group_name }}">
    </div>

    <div class="form-group">
        <label for="programme_code">Programme Code:</label>
        <input disabled type="text" class="form-control" name="programme_code" id="programme_code" value="{{ $group->programmes->programme_code }}">
    </div>

    <div class="form-group">
        <label for="programme_name">Programme Code:</label>
        <input disabled type="text" class="form-control" name="programme_name" id="programme_name" value="{{ $group->programmes->programme_name }}">
    </div>

</div>

@endsection
