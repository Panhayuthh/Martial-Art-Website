{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body> --}}
{{-- <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="member_name" placeholder="Name" required>
    <select name="member_role" required>
        <option value="coach">Coach</option>
        <option value="athlete">Athlete</option>
    </select>
    <input type="file" name="member_profile" accept="image/*">
    <input type="text" name="member_school" placeholder="School" required>
    <select name="member_gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="text" name="member_belt" placeholder="Belt" required>
    <select name="member_medal">
        <option value="">No Medal</option>
        <option value="gold">Gold</option>
        <option value="silver">Silver</option>
        <option value="bronze">Bronze</option>
    </select>
    <button type="submit">Register</button>
</form> --}}
@extends('user.components.layout')

@section('title', 'Register Member')

@section('content')

<form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center my-5">
        <div class="col-5">
            <h1 class="lead">Come join us and be part of</h1>
            <h1><strong>GAGAK PUTIH INDONESIA!</strong></h1>
            <div class="mb-3">
                <label class="form-label d-block">Role</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="roleCoach" name="member_role" value="coach" required>
                    <label class="form-check-label" for="roleCoach">Coach</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="roleAthlete" name="member_role" value="athlete" required checked>
                    <label class="form-check-label" for="roleAthlete">Athlete</label>
                </div>
            </div>
            <div class="row">                
                <div class="col mb-3">
                    <label for="member_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="member_name" name="member_name" required>
                </div>
                <div class="col mb-3">
                    <label for="member_school" class="form-label">School</label>
                    <input type="text" class="form-control" id="member_school" name="member_school" required>
                </div>
            </div>         
            <div class="mb-3">
                <label class="form-label d-block">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="genderMale" name="member_gender" value="male" required>
                    <label class="form-check-label" for="genderMale">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="genderFemale" name="member_gender" value="female" required>
                    <label class="form-check-label" for="genderFemale">Female</label>
                </div>
            </div>        
            <div class="mb-3">
                <label for="member_belt" class="form-label">Belt</label>
                <select class="form-select" id="member_belt" name="member_belt" required>
                    <option value="white">White</option>
                    <option value="yellow">Yellow</option>
                    <option value="orange">Orange</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                    <option value="purple">Purple</option>
                    <option value="brown">Brown</option>
                    <option value="black">Black</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="member_medal" class="form-label">Medal</label>
                <select class="form-select" id="member_medal" name="member_medal">
                    <option value="">No Medal</option>
                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                    <option value="bronze">Bronze</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="member_profile" class="form-label">Profile</label>
                <input type="file" class="form-control" id="member_profile" name="member_profile" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </div>
</form>

@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}