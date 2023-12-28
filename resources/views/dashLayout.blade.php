<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/dashStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- ======== top nav bar container  =======  -->
<div class="top-navBar">
    <div class="navbar">
        <div class="search-box">
            <span>
                <input type="text" class="search-input" placeholder="Search...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
        <div class="icons">
            <div class="notification-icon">
                <!-- <img src="path/to/notification-icon.jpg" alt="Notification"> -->
                <i class="fa-solid fa-bell fa-beat fa-2xl" style="margin-top: 0rem;"></i>
                <span class="notification-badge">3</span>
            </div>
            <div class="profile-icon">
                <img src="assets/linkdinPic.png" alt="Profile" style="width: 50px;height:50px">
            </div>
            <div class="userName">
                <span>
                    <!-- <p>welcome</p> -->
                    <h3>Isaac</h3>
                </span>
                <i class="fa-solid fa-chevron-down fa-beat fa-sm" style="color: #7e7a07;"></i>
            </div>
        </div>
    </div>

</div>
<!-- ======== End top nav bar container  =======  -->
<!-- ====aside start ==== -->
<div class="aside " id="aside">
    <div class="logo">
        <!-- <a href="#"><span>k@</span>isaac</a> -->
        <div class="log"><img src="{{asset('assets/nectausProLog2.png')}}" alt="log"
                style="width: 100px;height:100px; ">
        </div>

    </div>
    <div class="nav-toggler">
        <span></span>
    </div>
    <ul class="nav">

        <li><a href="/home"><i class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="/hive"><i class="fa-brands fa-hive"></i>My Hives</a></li>
        <li><a href="/inspections"><i class="fa-solid fa-pen-to-square"></i>Inspection</a></li>
        <li><a href="#portfolio"><i class="fa-regular fa-message"></i>Message</a></li>
        <li><a href="#contact"><i class="fa-solid fa-people-roof"></i>Community</a></li>
        <li><a href="#contact"><i class="fa-solid fa-newspaper"></i>News</a></li>
        <li><a href="#contact"><i class="fa-solid fa-gear"></i>Settings</a></li>
        <li><a href="#contact"><i class="fa-solid fa-right-from-bracket"></i>LogOut</a></li>




    </ul>
</div>
<!-- ====aside ends ==== -->

<body style="margin-left: 270px; top: 0px; position:relative; overflow-y: scroll; ">
    @yield('content')
</body>

</html>