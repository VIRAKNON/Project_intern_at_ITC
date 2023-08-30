<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset ('css/edit_info.css') }}">
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
                <div class="header">Update Information</div>
                <div class="main">
                    <label for="name">Name<span style="color: red">*</span></label>
                    <div class="name">
                        <div class="input-group">
                            <input required="" type="text"  id="name" name="text" autocomplete="off" class="input">
                            <label class="user-label">Enter name</label>
                        </div>
                    </div>
                    <div class="save">
                        <button class="button">
                            <span class="button-content">Save</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>