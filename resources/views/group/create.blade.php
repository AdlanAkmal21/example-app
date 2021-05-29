@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Create Group</h1>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary my-3">Group List</a>

    <form method="POST" action="{{ route('groups.store') }}">
        @csrf

        <div class="form-group">
            <label for="group_name">Group Name:</label>
            <input type="text" class="form-control" name="group_name" id="group_name">
        </div>

        <div class="form-group">
            <label for="group_name">Programme Code:</label>
            <select name="programme_id" id="programme_id" class="form-control">
                <option value="" selected disabled>Select Programme</option>
                @foreach ($programmes as $programme)
                <option value="{{ $programme->id }}">{{ $programme->programme_code }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary my-3">Add Group</button>
    </form>
</div>



@endsection
