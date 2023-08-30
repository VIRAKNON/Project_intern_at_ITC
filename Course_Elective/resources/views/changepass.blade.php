<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/changepass.css') }}">
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
            <div class="update_info">
                <div class="header">Chhange Password</div>
                <div class="main">
                    <div class="text">
                        <label for="form1"><p>Old Password <span style="color: red">*</span></p></label>
                        <label for="form2"><p>New Password <span style="color: red">*</span></p></label>
                        <label for="form3"><p>New Password Confirmation <span style="color: red">*</span></p></label>
                    </div>
                    <div class="fill">
                        <label class="wrapper">
                            <div class="input1">
                                <input type="text" placeholder="Input old password" name="text" id="form1" class="input">
                                <span class="placeholder">Input old password</span>
                            </div>
                        </label>
                        <label class="wrapper">
                            <div class="input1">
                                <input type="text" placeholder="Input new password" name="text" id="form2" class="input">
                                <span class="placeholder">Input new password</span>
                            </div>
                        </label>
                        <label class="wrapper">
                            <div class="input1">
                                <input type="text" placeholder="Comfirm password" name="text" id="form3" class="input">
                                <span class="placeholder">Comfirm password</span>
                            </div>
                        </label>
                    </div>
                    <div class="updatepw"><button>Update</button></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
