<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Admin NTD</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{route('dashboard')}}" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('user')}}">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Account Staff</span>
                </a>
            </li>
            <li>
                <a href="{{route('reset.show')}}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Reset Password</span>
                </a>
            </li>
            <li>
                <a href="{{route('position.show')}}">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Position</span>
                </a>
            </li>
            <li>
                <a href="{{route('department.show')}}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Department</span>
                </a>
            </li>
            <li class="log_out">
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
        </nav>
        @yield('list_staff')
        @yield('create_staff')
        @yield('edit_staff')

        @yield('list_position')
        @yield('create_position')
        @yield('update_position')

        @yield('list_department')
        @yield('create_department')
        @yield('update_department')

        @yield('list_user')
        @yield('create_user')
        @yield('update_user')
        @yield('list_reset')
    </section>


</body>

</html>
