<!DOCTYPE html>
<html lang="en">

<head>
    <title>DIT PAYROLL</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/style2.css" rel="stylesheet">
    
</head>

<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="bx bxl-graphql"></i>
                <span>GAF DIT</span>
            </div>
            <i class="bx bx-menu" id="btn"> </i>
        </div>

        <div class="user">
            <img src="/img/about_1.jpg" alt="me" class="user-img">
            <div>
                <p class="bold"> Jonah I.</p>
                <p>Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="bx bxs-grid-alt"></i>
                    <span class="nav-item">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('personnel.create') }}">
                    <i class="bx bxs-add-to-queue" id="AddDetails"></i>
                    <span class="nav-item">Add</span>
                </a>
                <span class="tooltip">Add Details</span>
            </li>
            <li>
                <a href="{{ route('personnel.store') }}">
                    <i class="bx bx-detail"></i>
                    <span class="nav-item">View</span>
                </a>
                <span class="tooltip">View Detials</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-log-out"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="container">
           
            @yield('content')

           
        </div>
       
    </div>
    <footer>
        Copyright 2023 @ JAYTRON
    </footer>

</body>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function() {
        sidebar.classList.toggle('active');
    };
</script>

</html>
