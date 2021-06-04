@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Edit Group <a href="{{ route('groups.index') }}" class="btn btn-secondary btn-fill float-right">Group List</a></h1>


    <form method="POST" action="{{ route('groups.update', $group) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="group_code">Group Code:</label>
            <input type="text" class="form-control" name="group_code" id="group_code" value="{{ $group->group_code }}">
        </div>

        <div class="form-group">
            <label for="group_name">Programme Code:</label>
            <select name="programme_id" id="programme_id" class="form-control">
                <option value="" selected disabled>Select Programme</option>
                @foreach ($programmes as $programme)
                <option value="{{ $programme->id }}" @if($programme->id == $group->programme_id) selected @endif>{{ $programme->programme_code }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success btn-fill my-3">Update Group</button>
    </form>
</div>

@endsection
