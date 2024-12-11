<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('/image/martialArtLogo.png') }}" type="image/png" >

</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container-fluid d-flex align-items-center justify-content-center flex-grow-1" style="background: url('https://s3-alpha-sig.figma.com/img/201b/ca44/6bf5e5589626246d58e0a6ae2c86c1d7?Expires=1734307200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=FqIzBo~0gfWJaPO1PlgDpxY4CwdI9BHGdzg4E0VQY9k9f2G7V~6KjEvyQQOx-k-TJ0EiBFRPvqjYbgdL6~W-KsafADZdEqa62e2bjJHV2iGEq6Lw~AmUjU1-C6jJlbq8JAHyZQHpU7QukhcTqQUqDJU9-AZkBDG2ohdeaWnWQbXF9xDOSavqqnHG1NWP3eizhSSEMkZ5q3VqlMq1ufuY3YO5VE1MG5lj~3gLjcieuMIYw-EH3Sg5UeAAxtl69onfCy0mxh3nUpNDXAhplb8gYu-xiXcrmrzwy9sSKd-BmDiYuDEANvKIhNHQKHXIZjIZtirFsbDp0pZTqILDpSZQJw__') no-repeat center center; background-size: cover;">       
        <div class="overlay position-absolute w-100 h-100 bg-dark" style="opacity: 0.5;"></div>
        <div class="position-relative z-index-2 w-100 d-flex justify-content-center">
            <form class="login-form p-4 bg-white rounded shadow" action="{{ route('login.submit') }}" method="POST" style="max-width: 500px; width: 100%;">
                @csrf
                <h2 class="text-center mb-4">LOGIN</h2>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <div class="mb-4">
                    <a href="" class="text-muted text-decoration-none">Forgot Password</a>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary w-25">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    @include('admin.components.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
