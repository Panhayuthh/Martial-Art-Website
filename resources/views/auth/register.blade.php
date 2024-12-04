<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group input, .form-group select {
            border-radius: 10px;
        }

        .btn-warning {
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">

    <div class="card p-5 shadow-lg col-12 col-md-8 col-lg-6 col-xl-5 rounded-3">
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center text-dark mb-4">Create an Account</h1>
            <p class="text-center text-muted mb-4">Please enter your information!</p>

            
            <div class="form-group">
                <input type="email" name="email" class="form-control mb-4" placeholder="Email" required>
            </div>
            
            <div class="form-group">
                <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control mb-4" placeholder="Confirm Password" required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning mb-3" style="width: 200px;">Register</button>
            </div>

            <div class="text-center">
                <a href="{{ route('login') }}" class="text-secondary">Already have an account?</a>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>