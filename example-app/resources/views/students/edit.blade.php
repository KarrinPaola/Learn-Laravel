@extends("layouts.app")
@section("content")
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Update Student</h5>
        </div>
        <div class="card-body">
            <form action="{{url('student/update', $student->id)}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{ $student->age }}" required>
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of birth</label>
                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}" required>
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male"
                                {{ $student->gender == 'male' ? 'checked' : '' }}>
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female"
                                {{ $student->gender == 'female' ? 'checked' : '' }}>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="score" class="form-label">Score</label>
                    <input type="text" class="form-control" id="score" name="score" value="{{ $student->score }}" required>
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
