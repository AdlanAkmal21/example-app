@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <h1>Group List <a href="{{ route('groups.create') }}" class="btn btn-primary btn-fill float-right">Add Group</a></h1>

    <table class="table table-bordered table-striped text-center">
        <thead>
          <tr>
            <th>Group Code</th>
            <th>Group Name</th>
            <th>Programme Code</th>
            <th>Programme Name</th>
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($groups as $group)
            <tr>
                <td>{{ $group->group_code }}</td>
                <td>{{ $group->group_name }}</td>
                <td>{{ $group->programmes->programme_code }}</td>
                <td>{{ $group->programmes->programme_name }}</td>

                <td>
                    <a href="{{route('groups.show', $group)}}" class="btn btn-info btn-fill btn-block">Show</a>
                </td>
                <td>
                    <a href="{{route('groups.edit', $group)}}" class="btn btn-success btn-fill btn-block">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('groups.destroy', $group) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-fill btn-block">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
