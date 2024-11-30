<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f8f9fa;
        }

        #sidebar {
            height: 100vh;
            width: 250px;
            top: 0;
            left: 0;
            padding: 20px;
            position: fixed;
        }

        #sidebar .brand {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            padding: 15px;
            text-decoration: none;
            color: #FFF;
            display: flex;
            align-items: center;
        }

        #sidebar .side-menu li {
            list-style: none;
        }

        #sidebar .side-menu a {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 12px 20px;
            color: white;
            transition: all 0.3s;
        }

        #sidebar .side-menu a:hover {
            background: #495057;
        }

        #sidebar .side-menu a i {
            margin-right: 10px;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #FFF;
            padding: 10px 20px;
        }

        nav .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .box-info {
            display: flex;
            gap: 1rem;
            margin: 20px;
        }

        .box-info li {
            flex: 1;
            display: flex;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .box-info li i {
            font-size: 2rem;
            margin-right: 15px;
            color: #007BFF;
        }

        .table-data {
            margin: 20px;
        }

        .table-data .order {
            background: #FFF;
            border-radius: 8px;
            padding: 20px;
        }

        .update-form {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

       .container-2 {
            width: 50%;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- sidebar -->
    <section id="sidebar" class="bg-dark">
        <a href="#" class="brand">
            <i class="bi bi-emoji-smile"></i>
            <span>AdminHub</span>
        </a>

        <ul class="side-menu">
            <li class="active">
                <a href="{{ url('dashboard') }}">
                    <i class="bi bi-house-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ url('students') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Students</span>
                </a>
            </li>

            <li>
                <a href="{{ url('drivers') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Drivers</span>
                </a>
            </li>

            <li>
                <a href="{{ url('trips') }}">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Add Routes</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu mt-5">
            <li>
                <a href="#" class="logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <section id="content">
        <nav>
            <h3>Welcome to Admin Dashboard</h3>
            <a href="#" class="profile">
                <img src="{{ asset('assets/images/dashboard.png') }}" alt="Admin">
            </a>
        </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
