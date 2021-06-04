@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Show Programme <a href="{{ route('programmes.index') }}" class="btn btn-secondary btn-fill float-right">Programme List</a></h1>


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
