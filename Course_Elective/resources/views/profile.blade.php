<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset ('css/profile.css') }}">
    <title>Profile</title>
</head>
<body>
    <div class="profile">
        <div class="pf_top">
            <div class="logo">ITC | SMIS</div>
            <div class="admins">
                <form>
                    <select name = "dropdown-toggle">
                        <option value = "taj" selected>Admin Islator</option>
                        <option value = "china">Dashboard</option>
                        <option value = "chirst">Change Password</option>
                        <option value = "machu">Logout</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="dashboard">
            <div class="main">
                <div class="info">
                    <div class="info_right">
                        <div class="header"><a href="">Dashboard</a></div>
                        <div class="user">
                            <div class="user_info">
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
                                                <td class="button">
                                                    <a href="{{ route("admin") }}" type="button" class="log_pf" >Edit Information</a>
                                                    <a href="{{ route("changepw") }}" type="button" class="log_out">Change Password</a>
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
</body>
</html>