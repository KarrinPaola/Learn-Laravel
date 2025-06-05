@extends('layouts.app')

@section('content')
    <h2>Students</h2>
    <form action={{ URL('student') }} method="GET">
        <div class="search">
            <input type="text" placeholder="Search" id="search" name="search" value="{{ request('search') }}">
            <button type="submit">Search</button>
            <a class="addStudentButton" href="{{ URL('student/add') }}">Add Student</a>
        </div>
    </form>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>date_of_birth</th>
                <th>gender</th>
                <th>score</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>
                        @if ($student->image)
                            <img width="150" src="{{ asset('storage/' . $student->image) }}" alt="">
                        @endif
                    </td>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td>{{ $student->updated_at }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->score }}</td>
                    <td>
                        <a href="{{ URL('student/edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ URL('student/delete', $student->id) }}" method="post" style="display:inline;"
                            onsubmit="return confirm("Are you sure you want to delete this student")">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="paginationDiv">
        {{ $students->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
@endsection
