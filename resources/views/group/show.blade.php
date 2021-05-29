@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Group</h1>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary my-3">Group List</a>

    <div class="form-group">
        <label for="group_name">Group Name:</label>
        <input type="text" class="form-control" name="group_name" id="group_name" value="{{ $group->group_name }}">
    </div>

</div>

@endsection
