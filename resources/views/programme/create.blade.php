@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Create Programme</h1>
    <a href="{{ route('programmes.index') }}" class="btn btn-secondary my-3">Programme List</a>

    <form method="POST" action="{{ route('programmes.store') }}">
        @csrf

        <div class="form-group">
            <label for="programme_code">Programme Code:</label>
            <input type="text" class="form-control" name="programme_code" id="programme_code">
        </div>

        <div class="form-group">
            <label for="programme_name">Programme Name:</label>
            <input type="text" class="form-control" name="programme_name" id="programme_name">
        </div>

        <button type="submit" class="btn btn-primary my-3">Add Programme</button>
    </form>
</div>



@endsection
