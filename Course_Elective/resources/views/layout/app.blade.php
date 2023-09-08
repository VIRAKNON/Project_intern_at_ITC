<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ITC | SMIS</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx'><img src="{{asset('image/ITC.jpg')}}" alt="nonprofile"></i>
            <span class="bx logo_name">ITC&nbsp;SMIS</span>
        </div>
        <ul class="nav_links">
            <div class="admin">
                <img src="https://dev.itc.edu.kh/img/profiles/avatar.png" class="user-profile-image">
                <p>AdminInstator</p>
                <div class="icon">
                    <i class="fas fa-circle"></i>
                    <span>Online</span>
                </div>
            </div>
        <li class="active">
            <a href="{{ route('dashboard') }}" class="active">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('studentAnnuals') }}" class="activeStudentAnnuals">
            <i class="fas fa-user"></i>
            <span class="links_name">Students</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-book"></i>
                <span>Curses Annually</span>
            </a>
        </li>
        <li>
            <a href="{{route('coursesProgram')}}">
            <i class="fas fa-user-astronaut"></i>
            <span class="links_name">Courses Program</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-user-secret"></i>
                <span>Students Section</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-graduation-cap"></i>
                <span>Scholarship</span>
            </a>
        </li>
        {{-- <li>
            <a href="#">
                <i class="fas fa-user-plus"></i>
                <span>Access Managment</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-user-edit"></i>
                <span>Examination</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="far fa-window-maximize"></i>
                <span>Manage Internship</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="far fa-calendar-alt"></i>
                <span>Schedual Management</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Accounting</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span>Configuration</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-toolbox"></i>
                <span>Log Viewer</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-exclamation-triangle"></i>
                <span>System Rounting</span>
            </a>
        </li> --}}
    </ul>
</div>
<section class="home-section">
    <nav>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
    </div>
    <div class="main_right">
        <div class="box_left">
            <div class="InputContainer">
                <input type="text" name="text" class="input" id="input" placeholder="Search">
                <label for="input" class="labelforsearch">
                <svg viewBox="0 0 512 512" class="searchIcon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                </label>
                <div class="border"></div>
                <button class="micButton"><svg viewBox="0 0 384 512" class="micIcon"><path d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"></path></svg>
                </button>
            </div>
        </div>
        <div class="box_right">
            <div class="right_a">
                <div id="box"><i class="fas fa-envelope"></i></div>
                <div id="box"><i class="fas fa-bell"></i></div>
                <div id="box"><i class="fas fa-flag"></i></div>
            </div>
            <div class="right_b">
                <div class="box1">
                <a class="button1" href="#popup1">
                    <i class="fas fa-user"></i>
                    <span>Admin Instator</span>
                </a>
                </div>
                <div id="popup1" class="overlay">
                    <div class="popup2">
                        <a class="close1" href="#">&times;</a>
                        <div class="contents">
                            <div class="profile">
                                <svg width="15vh" height="15vh" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 8.8a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"></path>
                                    <path fill-rule="evenodd" d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0ZM1.6 12C1.6 6.256 6.256 1.6 12 1.6c5.744 0 10.4 4.656 10.4 10.4 0 2.96-1.236 5.63-3.22 7.524A5.6 5.6 0 0 0 13.6 14.4h-3.2a5.6 5.6 0 0 0-5.58 5.124A10.37 10.37 0 0 1 1.6 12Z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="sumuray">
                                <p>Admin Islators-Web Developer</p>
                            </div>
                            <div class="view">
                                <a href="{{ route("admin/profile") }}" type="button" class="log_pf" >Profile</a>
                                <a href="{{ route("login") }}" type="button" class="log_out">logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-content">

{{-- content --}}
    @yield('dashboard')
    @yield('students')
    @yield('createStudent')
    @yield('showStudent')
    @yield('editStudent')
    @yield('coursesProgram')
{{-- endcontent --}}
    </div>
    <div class="footer">
        <span>Copyright © 2023 <a href="#">ITC | SMIS.</a></span>
        <span>All Right Reserved.</span>
    </div>
</section>
</body>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000
    )
});
    document.querySelector("#close").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "none";
    });
</script>
</html>
