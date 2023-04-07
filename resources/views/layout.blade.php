<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="students">Students</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="studentRegistrationForm">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="about">About Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="contact">Contact Us</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="login">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="http://localhost:8000/phpmyadmin/db_structure.php?server=1&db=laravellearning" target="_blank">Database</a>
    </li>


</ul>
<div class="container">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
