<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>ITC | SMIS</title>
    {{-- <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        }
        .sidebar {
        position: fixed;
        height: 100%;
        width: 250px;
        background: #1F292E;
        transition: all 0.5s ease;
        }
        .sidebar.active {
        width: 60px;
        }
        .sidebar .logo-details {
        background-color: #157deccc;
        height: 80px;
        display: flex;
        align-items: center;
        }
        .sidebar .logo-details i {
        font-size: 25px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center;
        }
        .sidebar .logo-details i img{
        width: 45px;
        height: 45px;
        border-radius: 50%;
        }
        .sidebar .logo-details .logo_name {
        color: #fff;
        padding-left: 10px;
        padding-bottom: 10px;
        font-size: 30px;
        }
        .sidebar .nav-links {
        height: 100%;
        padding-bottom: 15rem;
        margin-top: 17px;
        overflow: scroll;
        }
        ::-webkit-scrollbar {
        display: none;
        }
        .sidebar .nav-links li {
        position: relative;
        list-style: none;
        height: 50px;
        }
        .sidebar .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.1s ease;
        }
        .sidebar .nav-links li a.active{
        background: #2C3E50;
        border-left: 4px solid #157DEC;
        color: #FFFFFF;
        }
        .sidebar .nav-links li a.active i{
        color: #FFFFFF;
        }
        .sidebar .nav-links li a.active span{
        color: #FFFFFF;
        }
        .sidebar .nav-links li a:hover {
        background: #2C3E50;
        color: #fff;
        border-left: 4px solid #157DEC;
        }
        .sidebar .nav-links li a:hover i{
        color: white;
        }
        .sidebar .nav-links li a:hover span{
        color: white;
        }
        .sidebar .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #B3B6B7;
        }
        .sidebar .nav-links li a .links_name {
        color:#B3B6B7;
        font-size: 16px;
        white-space: nowrap;
        }
        .home-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
        }
        .sidebar.active ~ .home-section {
        width: calc(100% - 60px);
        left: 60px;
        }
        .admin{
        width: 100%;
        padding-bottom: 17px;
        position: relative;
        }
        .admin img{
        width: 38px;
        height: 40px;
        border-radius: 15px;
        color: #A6ACAF;
        margin-left: 15px;
        }
        .admin p{
        color: #B3B6B7;
        position: absolute;
        top: 2px;
        left: 70px;
        }
        .icon i{
        color: #1bb51b;
        font-size: 11px;
        position: absolute;
        top: 26px;
        left: 72px;
        }
        .icon span{
        color: #B3B6B7;
        position: absolute;
        top: 22px;
        left: 89px;
        }
        /* Searching */
        .InputContainer {
        width: 75%;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
        overflow: hidden;
        cursor: pointer;
        margin: auto;
        margin-top: 20px;
        padding-left: 15px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.075);
        }
        .input {
        width: 90%;
        height: 100%;
        border: none;
        outline: none;
        font-size: 0.9em;
        caret-color: #34495E;
        }
        .labelforsearch {
        cursor: text;
        padding: 0px 12px;
        }
        .searchIcon {
        width: 13px;
        }
        .border {
        height: 40%;
        width: 1.3px;
        background-color: rgb(223, 223, 223);
        }
        .micIcon {
        width: 12px;
        }
        .micButton {
        padding: 0px 15px 0px 12px;
        border: none;
        background-color: transparent;
        height: 40px;
        cursor: pointer;
        transition-duration: .3s;
        }
        .searchIcon path {
        fill: rgb(114, 114, 114);
        }
        .micIcon path {
        fill:#656869;
        }
        .home-section nav {
            display: flex;
            justify-content: space-between;
            height: 80px;
            background-color: #157DEC;
            display: flex;
            align-items: center;
            position: fixed;
            width: calc(100% - 240px);
            left: 240px;
            z-index: 100;
            /* padding: 0 20px; */
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
        }
        .home-section nav{
        width: 88%;
        height: 80px;
        }
        .sidebar.active ~ .home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }
        .home-section nav .sidebar-button {
            display: flex;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
        }
        nav .sidebar-button i {
            color: #fff;
            font-size: 35px;
            margin-right: 10px;
            padding-left: 10px;
        }
        .main_right{
            width: 100%;
            height: 100%;
            display: flex;
        }
        .box_left{
            width: 60%;
            height: 100%;
        }
        .box_right{
            width: 40%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .right_a{
            width: 40%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #box{
            width: 100px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right_a #box i{
            font-size: 18px;
            color: white;
        }
        #box:hover{
            background-color: #1373dbcc;
            border-bottom: 2px solid #34495E;
            transition: none;
            padding: none;
        }
        .right_a:hover span{
            background-color: #2874A6;
        }
        .right_a span{
            width: 33.3%;
            height: 100%;
        }
        /* popup */

        .popup{
            background-color:#274afcf2;
            width: 97%;
            height: 120px;
            padding-top: -30px;
            border-radius: 8px;
            margin-left: 20px;
            font-family: "Poppins",sans-serif;
        }
        .popup #close{
            display: block;
            background-color: transparent;
            font-size: 20px;
            color: #ffffff;
            background-color: rgba(255, 0, 0, 0.882);
            border-radius: 100%;
            width: 20px;
            height: 20px;
            border: none;
            outline: none;
            position: absolute;
            top: 14.3%;
            right: 3.2%;
            cursor: pointer;
        }
        .popup .text{
            color: #ECF0F1;
            padding-left: 20px;
            padding-top: 20px;
            font-size: 15px;
        }
        .text span{
        font-size: 17px;
        }
        .right_b{
            width: 60%;
            height: 100%;
            position: sticky;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        .right_b .button1 i{
            color: white;
            font-size: 25px;
        }
        .right_b .button1 span{
            padding-left: 15px;
            font-size: 20px;
            color: white;
        }
        .right_b:hover{
            background-color: #1373dbcc;
        }

        /* Logout */
        .box1 {
        width: 100%;
        margin: 0 auto;
        padding: 35px;
        background-clip: padding-box;
        text-align: center;
        }
        .button1 {
        font-size: 1em;
        padding: 10px;
        color: #fff;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;
        }
        .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
        }
        .overlay:target {
        visibility: visible;
        opacity: 1;
        }
        .popup2 {
        /* height: 400px; */
        margin: 16rem auto;
        padding: 20px;
        background: linear-gradient(to right, #005c97, #363795);
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
        }
        .popup2 .close1 {
        position: absolute;
        top: 16px;
        right: 25px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #fff;
        }
        .pf{
        width: 15vh;
        height: 15vh;
        border-radius: 50%;
        background-color: #ffffff;
        margin: 0 auto;
        margin-top: 15px;
        }
        .pf img{
        width: 6rem;
        height: 6rem;
        margin: 15px 22px;
        border-radius: 10px;
        color: #ffffff;
        }
        .view button{
        width: 6rem;
        }
        this is a recreation of twitter search in css
        .form {
            --input-text-color: #fff;
            --input-bg-color: #283542;
            --focus-input-bg-color: transparent;
            --text-color: #949faa;
            --active-color: #1b9bee;
            --width-of-input: 200px;
            --inline-padding-of-input: 1.9em;
            --gap: 0.9rem;
        }
        .nav_link {
            margin-left: -40px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
            list-style: none;
            transition: 200ms ease;
            cursor: pointer;
        }
        .view{
        padding-top: 4rem;
        display: flex;
        justify-content: center;
        }
        .view .log_pf{
        padding: 10px;
        border-radius: 5px;
        border: none;
        appearance: none;
        color: #fff;
        cursor: pointer;
        margin-right: 20px;
        background-color: #30a0ebe5;
        }
        .view .log_pf:hover{
        background-color: #157dec;
        }
        .view .log_out{
        padding: 10px;
        cursor: pointer;
        border: none;
        appearance: none;
        border-radius: 5px;
        color: #fff;
        background-color: #e4832e;
        }
        .view .log_out:hover{
        background-color: #f97807;
        }
        @media screen and (max-width: 700px){
        .box{
            width: 70%;
        }
        .popup{
            width: 70%;
        }
        }

        .home-section .home-content {
            padding-top: 80px;
        }
        .sub_right{
            width: 100%;
            height: 1280px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .head{
            width: 100%;
            padding: 10px 20px;
            display: flex;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        .head_left{
            width: 92%;
        }
        .head_left span{
            font-size: 30px;
        }
        .head_right{
            width: 8%;
            color: gray;
            padding-top: 10px;
        }
        .sub_content{
            width: 97%;
            height: 100%;
            margin-top: 5px;
            /* background-color: #ECF0F1 ; */
            border-radius: 5px;
            border-top: 4px solid #008000;
        }
        .sub_content p{
            font-size: 23px;
            padding: 10px 10px;
        }
        .info{
            width: 100%;
            height: 90%;
            display: flex;
            justify-content: center;
        }
        .info_left{
            width: 8%;
            height: 98%;
        }
        .info_left i{
            border-radius: 60%;
            padding: 12px;
            color: white;
            background-color: #157DEC;
            margin-left: 30%;
        }
        .line{
            width: 5px;
            height: 88.8%;
            margin-left: 45%;
            background-color: #B3B6B7;
            position: relative;
        }
        .line i{
            color: white;
            background-color: #979A9A;
            position: absolute;
            bottom: -39px;
            right: -18px;
        }
        .info_right{
            width: 95%;
            height: 1000px;
            border-radius: 5px;
            background-color: #D7DBDD;
            padding: 10px;
        }
        .info_right a{
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            color:  #0FA6F1;
        }
        .info_right a:hover{
            color:#1b9bee;
        }
        .info_right span{
            font-size: 19px;
        }
        .user{
            width: 98%;
            height: 95%;
            margin-top: 18px;
            border-radius: 5px;
            background-color:#F4F6F7;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .user_info{
            width: 98%;
            height: 100%;
            border-radius: 5px;
            background-color:#F4F6F7;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .user_top{
            width: 96%;
            height: 5%;
            margin-top: 13px;
            border-radius: 5px;
            margin-left: 15px;
            background-color: #F4F6F7;
            display: flex;
            flex-direction: row;
        }
        .user_top1{
            width: 17%;
            background-color: #FFFFFF ;
            font-size: 20px;
            color: #979A9A ;
            border-radius: 5px;
            padding-left: 15px;
            padding-top: 10px;
            border-top: 1px solid #BDC3C7;
            border-left: 1px solid #BDC3C7;
            border-right: 1px solid #BDC3C7;
        }
        .user_down{
            width: 98%;
            height: 90%;
            margin-left: 15px;
            display: flex;
            flex-direction: column;
        }
        .user_down1{
            width: 100%;
            height: 50%;
            background-color: #E5E8E8;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .user_down2{
            width: 100%;
            height: 50%;
            border-radius: 5px;
            background-color:#E5E8E8;
        }
        .user_down2 table{
            width: 100%;
        }
        .user_down2 table td{
            padding: 10px;
        }
        table tr td span button{
            background-color:#157dece4;
            border: none;
            padding: 7px;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }
        tr:nth-child(odd):hover{background-color:#E5E7E9;}
        tr:nth-child(even) {background: #E5E7E9}
        tr:nth-child(odd) {background: #F0F3F4}
        .btn1:hover{
            background-color: #157dec;
        }
        .btn2{
            background-color: #f28729;
        }
        .btn2:hover{
            background-color:#f97807;
        }
        .footer{
            width: 100%;
            height: 70px;
            margin-top: 23px;
            padding-top: 7px;
            display: flex;
            align-items: center;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }
        .footer span{
            padding-left: 15px;
            font-size: 20px;
        }
        .footer span a{
            text-decoration: none;
            color: #0FA6F1;
        }
        @media (max-width: 1150px) {
        .home-content .sales-boxes {
            flex-direction: column;
        }
        .home-content .sales-boxes .box {
            width: 100%;
            overflow-x: scroll;
            margin-bottom: 30px;
        }
        .home-content .sales-boxes .top-sales {
            margin: 0;
        }
        }
        @media (max-width: 1000px) {
        .overview-boxes .box {
            width: calc(100% / 2 - 15px);
            margin-bottom: 15px;
        }
        }
        @media (max-width: 700px) {
        nav .sidebar-button .dashboard,
        nav .profile-details .admin_name,
        nav .profile-details i {
            display: none;
        }
        .home-section nav .profile-details {
            height: 50px;
            min-width: 40px;
        }
        .home-content .sales-boxes .sales-details {
            width: 560px;
        }
        }
        @media (max-width: 550px) {
        .overview-boxes .box {
            width: 100%;
            margin-bottom: 15px;
        }
        .sidebar.active ~ .home-section nav .profile-details {
            display: none;
        }
        }

    </style> --}}
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx'><img src="ITC.jpg" alt=""></i>
        <span class="bx logo_name">ITC&nbsp;SMIS</span>
        </div>
        <ul class="nav-links">
            <div class="admin">
            <img src="https://dev.itc.edu.kh/img/profiles/avatar.png" class="user-profile-image">
            <p>AdminInstator</p>
            <div class="icon">
                <i class="fas fa-circle"></i>
                <span>Online</span>
            </div>
        </div>
        <li>
            <a href="#" class="active">
            <i class="fas fa-tachometer-alt"></i>
            <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-user"></i>
            <span class="links_name">Student</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-user-secret"></i>
            <span class="links_name">Students Section</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-user-astronaut"></i>
            <span class="links_name">Employee</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-graduation-cap"></i>
            <span class="links_name">Scholarship</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-user-plus"></i>
            <span class="links_name">Access Managment</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-user-edit"></i>
            <span class="links_name">Examination</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-book"></i>
            <span class="links_name">Curse Managment</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="far fa-window-maximize"></i>
            <span class="links_name">Manage Internship</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="far fa-calendar-alt"></i>
            <span class="links_name">Schedual Management</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-file-invoice-dollar"></i>
            <span class="links_name">Accounting</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class='bx bx-cog'></i>
            <span class="links_name">Configuration</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-toolbox"></i>
            <span class="links_name">Log Viewer</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-exclamation-triangle"></i>
            <span class="links_name">System Rounting</span>
            </a>
        </li>

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
                    <div class="pf"><img src="https://dev.itc.edu.kh/img/profiles/avatar.png" class="user-profile-image"></div>
                    <p>Admin Islators-Web Developer</p>
                    <div class="view">
                        <button class="log_pf">Profile</button>
                        <button class="log_out">logout</button>
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
{{-- <div class="sub_right">
    <div class="head">
        <div class="head_left">
            <span>ITC | SMIS</span>
            <span style="font-size: 19px; color:gray; padding-left:10px">AdminIslators Dashboard</span>
        </div>
        <div class="head_right">Dashboard</div>
    </div>
    <div class="sub_content">
        <p>Welcome AdminIslator!</p>
        <hr><br>
        <div class="popup">
            <button id="close">&times;</button>
            <div class="text">
                <h2>i Welcome to ITC-School Management Information System.</h2>
                <span>
                This application is under construction with partial release. Please report the problems or your demanding to our developers by using this REPORTING SYSTEM. We appreciate your contributions and we hope to run this system in full scale very soon.
                <br>- Developer Team
                </span>
            </div>
        </div>
        <br>
        <div class="info">
            <div class="info_left">
                <i class="fa fa-user bg-purple"></i>
                <div class="line"><i class="fa fa-clock"></i></div>
            </div>
            <div class="info_right">
                <a href="">User Information</a>
                <span>view/update your information</span>
                <div class="user">
                    <div class="user_info">
                        <div class="user_top">
                            <div class="user_top1">My Information</div>
                            <div class="user_top2"></div>
                        </div>
                        <div class="user_down">
                            <div class="user_down1">
                                <img src="https://dev.itc.edu.kh/img/profiles/avatar.png" class="user-profile-image">
                            </div>
                            <div class="user_down2">
                                <table>
                                    <tr>
                                        <td><h3>Name</h3></td>
                                        <td><span>Admin Islator</span></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Email</h3></td>
                                        <td><span>admin@edu.itc.kh</span></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Created At</h3></td>
                                        <td><span>2016-04-26 07:19:26 (7 years ago)</span></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Last Updated</h3></td>
                                        <td><span>2023-08-11 09:56:17 (1 week ago)</span></td>
                                    </tr>
                                    <tr>
                                        <td><h3>Actions</h3></td>
                                        <td>
                                            <span><button class="btn1">Edit Infomation</button></span>
                                            <span><button class="btn2">Change Password</button></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


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
