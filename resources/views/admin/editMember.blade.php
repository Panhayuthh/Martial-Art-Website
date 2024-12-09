<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex flex-wrap">
            @foreach($members as $member)
                <!-- Modal -->
                <div class="modal fade" id="editMemberModal-{{ $member->id }}" tabindex="-1" aria-labelledby="editMemberModalLabel-{{ $member->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editMemberModalLabel-{{ $member->id }}">Edit Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label for="member_role">Role</label>
                                        <input type="text" name="member_role" class="form-control" value="{{ $member->member_role }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_name">Name</label>
                                        <input type="text" name="member_name" class="form-control" value="{{ $member->member_name }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_profile">Member Profile</label>
                                        <input type="file" name="member_profile" class="form-control">
                                        @if ($member->member_profile)
                                            <img src="{{ asset('storage/' . $member->member_profile) }}" alt="Member Profile" class="img-fluid mt-2" style="max-height: 200px;">
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_school">School</label>
                                        <input type="text" name="member_school" class="form-control" value="{{ $member->member_school }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_gender">Gender</label>
                                        <input type="text" name="member_gender" class="form-control" value="{{ $member->member_gender }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_belt">Belt</label>
                                        <input type="text" name="member_belt" class="form-control" value="{{ $member->member_belt }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="member_medal">Medal</label>
                                        <input type="text" name="member_medal" class="form-control" value="{{ $member->member_medal }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
