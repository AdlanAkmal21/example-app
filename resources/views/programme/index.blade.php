@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Programme List</h1>

    <a href="{{ route('programmes.create') }}" class="btn btn-primary my-3">Add Programme</a>

    <table class="table table-striped">
        <thead>
          <tr>
            <th>Programme Code<th>
            <th>Programme Name<th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($programmes as $programme)
            <tr>
                <td>{{ $programme->programme_code }}</td>
                <td>{{ $programme->programme_name }}</td>

                <td>
                    <a href="{{route('programmes.show', $programme)}}" class="btn btn-info">Show</a>
                </td>
                <td>
                    <a href="{{route('programmes.edit', $programme)}}" class="btn btn-success">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('programmes.destroy', $programme) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection