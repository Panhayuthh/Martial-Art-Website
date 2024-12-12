<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Add Member Modal -->
        <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="modal-body">
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
                            <div class="mb-3">
                                <label for="member_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="member_name" name="member_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="member_school" class="form-label">School</label>
                                <input type="text" class="form-control" id="member_school" name="member_school" required>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
