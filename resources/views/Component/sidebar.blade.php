<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook</title>
    <link rel="stylesheet" href="{{ asset('style/sidebar.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <!-- ==== Side bar ====-->
    <nav class="sidebar ">
        <header>
            <div class="image-text">
                <!--<span class="image">
            <img src="logo.png" alt="" />
          </span>-->

                <div class="text header-text">
                    <span class="name">Simagang</span>
                    <span class="profession">Bank Bri</span>
                </div>
            </div>


        </header>

        <div class="menu-bar">
            <ul class="menu">

                <li class="nav-links">
                    <a href="#">
                        <i class="bx bx-food-menu icon"></i>
                        <span class="text nav-text">Logbook</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="#">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="#">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Pembimbing Lapangan</span>
                    </a>
                </li>
                <li class="nav-links">
                    <a href="#">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Dosen Pembimbing</span>
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

</body>

</html>