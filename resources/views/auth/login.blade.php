<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
    
        body {                
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }
        .container-fluid {
            flex: 1;
            display: flex;
        }
        .container-fluid {
            flex: 1;
            background: url('https://s3-alpha-sig.figma.com/img/201b/ca44/6bf5e5589626246d58e0a6ae2c86c1d7?Expires=1734307200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=FqIzBo~0gfWJaPO1PlgDpxY4CwdI9BHGdzg4E0VQY9k9f2G7V~6KjEvyQQOx-k-TJ0EiBFRPvqjYbgdL6~W-KsafADZdEqa62e2bjJHV2iGEq6Lw~AmUjU1-C6jJlbq8JAHyZQHpU7QukhcTqQUqDJU9-AZkBDG2ohdeaWnWQbXF9xDOSavqqnHG1NWP3eizhSSEMkZ5q3VqlMq1ufuY3YO5VE1MG5lj~3gLjcieuMIYw-EH3Sg5UeAAxtl69onfCy0mxh3nUpNDXAhplb8gYu-xiXcrmrzwy9sSKd-BmDiYuDEANvKIhNHQKHXIZjIZtirFsbDp0pZTqILDpSZQJw__') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            position: relative;
        }
        .container-fluid .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .container-fluid .content {
            position: relative;
            z-index: 2;
            text-align: left;
        }
        .login-form {
            width: 100%;
            max-width: 500px;
            background: #fff;
            z-index:2;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: #13265c;
            
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 50px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-login {
            background-color: #014f86;
            color: #fff;
            border-radius: 20px;
        }
        .btn-login:hover {
            background-color: #013c68;
        }
        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="overlay"></div>
        <div class="content">
            <h1>GAGAK PUTIH INDONESIA</h1>
        </div>
        <form class="login-form" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <h2>LOGIN</h2>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-login btn-block">LOGIN</button>
            </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="row align-items-center">
            <!-- Left Section: Contact Us -->
            <div class="col-md-4 text-left">
                <div>Contact Us</div>
                <div>0812-2354-1008 (WhatsApp)</div>
                <div>gagakputihindonesia@gmail.com</div>
            </div>

            <!-- Center Section: Social Media -->
            <div class="col-md-4 text-center">
                <div>Social Media</div>
                <a href="#" class="mx-2"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
            </div>

            <!-- Right Section: Copyright -->
            <div class="col-md-4 text-right">
                <div>© 2024 GAGAK PUTIH INDONESIA - CAMxID TEAM UMN</div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



