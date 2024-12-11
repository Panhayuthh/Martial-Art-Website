<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
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
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>