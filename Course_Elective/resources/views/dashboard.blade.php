<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <script src="{{asset('Js/dashboard.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <div class="main_left">ITC | SMIS</div>
            <div class="main_right">
                <div class="box_left"></div>
                <div class="box_right">
                    <div class="right_a">
                        <div id="box"><i class="fas fa-envelope"></i></div>
                        <div id="box"><i class="fas fa-bell"></i></div>
                        <div id="box"><i class="fas fa-flag"></i></div>
                    </div>
                    <div class="right_b">
                        <i class="fas fa-user"></i>
                        <p>Admin Instator</p>
                    </div>  
                </div>  
            </div>
        </div>
        <div class="sub_main">
            <div class="sub_left">
                <div class="admin">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-2 h-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                      
                    <p>Admin Instator</p>
                    <div class="active">
                        <i class="fas fa-circle"></i>
                        <span>Online</span>
                    </div>
                </div> 
                <nav class="nav">
                    <div class="nav_input">
                        <form class="form">
                            <label for="search">
                                <input class="input" type="text" required="" placeholder="Search.." id="search">
                                <div class="fancy-bg"></div>
                                <div class="search">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                                        <g>
                                            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <button class="close-btn" type="reset">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </label>
                        </form>
                    </div>
                    <ul class="nav_link">
                        <li>
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </li>
                        <li>
                            <i class="fas fa-user"></i>
                            <span>Students</span>
                        </li>
                        <li>
                            <i class="fas fa-user-secret"></i>
                            <span>Students Section</span>
                        </li>
                        <li>
                            <i class="fas fa-user-astronaut"></i>
                            <span>Employyee</span>
                        </li>
                        <li>
                            <i class="fas fa-graduation-cap"></i>
                            <span>Scholarship</span>
                        </li>
                        <li>
                            <i class="fas fa-user-plus"></i>
                            <span>Access Managment</span>
                        </li>
                        <li>
                            <i class="fas fa-user-edit"></i>
                            <span>Examination</span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                            <span>Course Management</span>
                        </li>
                        <li>
                            <i class="far fa-window-maximize"></i>
                            <span>Manage Internship</span>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <span>Schedual Management</span>
                        </li>
                        <li>
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Accounting</span>
                        </li>
                        <li>
                            <i class="fas fa-tools"></i>
                            <span>Configuration</span>
                        </li>
                        <li>
                            <i class="fas fa-toolbox"></i>
                            <span>Log Viewer</span>
                        </li>
                        <li>
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>System Rounting</span>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sub_right">
                <div class="head">
                    <div class="head_left">
                        <span>ITC | SMIS</span>
                        <span style="font-size: 19px; color:gray; padding-left:10px">AdminIslators Dashboard</span>
                    </div>
                    <div class="head_right">Dashboard</div>
                </div>
                <div class="sub_content">
                    <br><span>Welcome AdminIslator!</span>
                    <hr>
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
            </div>
        </div>
    </div>
    <div class="footer">
        <span>Copyright © 2023 <a href="#">ITC | SMIS.</a></span>
        <span>All Right Reserved.</span>
    </div>
</body>
</html>