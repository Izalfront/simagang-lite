<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/user.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
    <nav class="sidebar ">
        <header>
            <div class="image-text">
                <img src="{{ asset('/Logo.jpg') }}" alt="User Image" class="logo">
                <div class="text header-text">
                    <span class="name">Simagang</span>
                    <span class="profession">Bank Bri</span>
                </div>
            </div>
        </header>

        <div class="menu-bar">
            <ul class="menu">
                <li class="nav-links">
                    <a href="{{ route('users.index') }}">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{ route('lecturers.index') }}">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Dosen Pembimbing</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{ route('supervisors.index') }}">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Lapangan</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="{{ route('logbooks.index') }}">
                        <i class="bx bx-food-menu icon"></i>
                        <span class="text nav-text">Logbook</span>
                    </a>
                </li>
            </ul>

            <div class="bottom-content">
                <li class="nav-links">
                    <a href="#">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Log out</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <div class="home">
        @yield('content')
    </div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- SweetAlert 2 --}}
    @include('sweetalert::alert')
</body>

</html>
