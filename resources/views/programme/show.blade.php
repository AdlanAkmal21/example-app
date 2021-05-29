@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Programme</h1>
    <a href="{{ route('programmes.index') }}" class="btn btn-secondary my-3">Programme List</a>

    <div class="form-group">
        <label for="programme_code">Programme Code:</label>
        <input disabled type="text" class="form-control" name="programme_code" id="programme_code" value="{{ $programme->programme_code }}">
    </div>

    <div class="form-group">
        <label for="programme_name">Programme Name:</label>
        <input disabled type="text" class="form-control" name="programme_name" id="programme_name" value="{{ $programme->programme_name }}">
    </div>

</div>

@endsection
