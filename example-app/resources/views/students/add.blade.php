@extends("layouts.app")
@section("content")

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Student Registration</h5>
        </div>
        <div class="card-body">
            <form action="{{URL('student/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old("name")}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old("email")}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age" value="{{old("age")}}" required>
                </div>
                <div class="mb-3">
                    <label for="date_of_birth" class="form-label">Date of birth</label>
                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{old("date_of_birth")}}" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="male" {{old("gender")=='male'?'checked':""}}>
                            <label for="male" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="female" {{old("gender")=='female'?'checked':""}}>
                            <label for="female" class="form-check-label">Female</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="score" class="form-label">Score</label>
                    <input type="text" class="form-control" id="score" name="score" value="{{old("score")}}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
