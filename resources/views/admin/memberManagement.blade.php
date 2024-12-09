<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styling for better visual */
        .header {
            margin-bottom: 20px;
        }

        .table {
            margin-top: 20px;
            overflow-x: auto; /* Allow horizontal scrolling on smaller screens */
        }

        th, td {
            text-align: center; /* Center text inside table */
        }

        .table th {
            background-color: #f8f9fa;
            color: #333;
        }

        .table td {
            background-color: #ffffff;
            color: #555;
        }
        
    </style>
</head>

<body>
@include('/admin/editMember')
    <x-layouts>
        <div class="container mt-4">
            <div class="header text-center mb-4">
                <h1>Member Management</h1>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <a href="#" class="btn btn-warning">Coach</a>
                <a href="#" class="btn btn-primary">Athlete</a>
            </div>
            <form action="{{ route('member.management') }}" method="get">
                <div class="d-flex align-items-center">
                    <input type="search" name="search" class="form-control me-2" placeholder="Search club name" value="{{ $search ?? '' }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>

            </div>

            @if (isset($results) && count($results) > 0)
                <ul>
                    @foreach ($results as $result)
                        <li>{{ $result->member_name }}</li>
                    @endforeach
                </ul>
            @elseif (isset($results))
                <p class="text-dark">No results found.</p>
            @endif

            <!-- Table Section -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">School</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Belt</th>
                            <th scope="col">Medal</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $index => $member)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $member->member_profile) }}" alt="Profile" style="width: 45px; height: 45px"
                                    class="rounded-circle">
                                </td>
                                <td>{{ $member->member_name }}</td>
                                <td>{{ $member->member_role }}</td>
                                <td>{{ $member->member_school }}</td>
                                <td>
                                    <span class="text-muted">
                                        <i class="bi {{ $member->member_gender == 'Male' ? 'bi-gender-male text-primary' : 'bi-gender-female text-danger' }} me-2"></i>
                                        {{ $member->member_gender }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge bg-secondary bg-opacity-10 text-dark">
                                    {{ $member->member_belt }}
                                    </span>
                                </td>
                                <td>{{ $member->member_medal }}</td>
                                <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editMemberModal-{{ $member->id }}">
                                    Edit
                                </button>
                                <form action="{{ route('member.delete', ['member' => $member]) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </x-layouts>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
