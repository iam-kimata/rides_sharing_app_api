<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Login Form</title>
    <style>
        .login-form {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8f9fa;
        }
        .login-form .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-dark">
        <div class="container-xxl">
            <a href="#home" class="navbar-brand">
                <span class="fw-bold text-light fs-3">
                    ARU<span class="text-primary ">SRSS<span class="text-light"></span>
                </span>
            </a>

            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Minimizing Transportation Cost</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- login form -->
    <div class="login-form">
        <div class="card shadow-lg p-4">
            <h1 class="text-center mb-4">Login</h1>
            <form>
                <div class="mb-4">
                    <label for="email" class="form-label">Username:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Username" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </form>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer bg-secondary text-light text-center py-4">
        <div class="container">
            <p class="mb-0">The website is Designed, Developed, and Maintained by Ardhi University</p>
            <p class="mb-0">&copy;{{ date('Y') }}, All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
