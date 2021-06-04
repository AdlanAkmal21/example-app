@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Edit Programme <a href="{{ route('programmes.index') }}" class="btn btn-secondary btn-fill float-right">Programme List</a></h1>


    <form method="POST" action="{{ route('programmes.update', $programme) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="programme_code">Programme Code:</label>
            <input type="text" class="form-control" name="programme_code" id="programme_code" value="{{ $programme->programme_code }}">
        </div>

        <div class="form-group">
            <label for="programme_name">Programme Name:</label>
            <input type="text" class="form-control" name="programme_name" id="programme_name" value="{{ $programme->programme_name }}">
        </div>

        <button type="submit" class="btn btn-success btn-fill my-3">Update Programme</button>
    </form>
</div>

@endsection
