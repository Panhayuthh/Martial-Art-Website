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
                    <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="member_role">Role</label>
                                <input type="text" name="member_role" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_name">Name</label>
                                <input type="text" name="member_name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_profile">Member Profile</label>
                                <input type="file" name="member_profile" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_school">School</label>
                                <input type="text" name="member_school" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_gender">Gender</label>
                                <input type="text" name="member_gender" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_belt">Belt</label>
                                <input type="text" name="member_belt" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="member_medal">Medal</label>
                                <input type="text" name="member_medal" class="form-control" required>
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
