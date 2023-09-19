<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset ('css/changepass.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>ITC | SMIS</title>
</head>
<body>
    <div class="profile">
        <div class="pf_top">
            <div class="logo">ITC | SMIS</div>
            <div class="admins">
                <form>
                    <select name = "dropdown-toggle">
                        <option value = "taj" selected>AdminIslator</option>
                        <option value = "china">Dashboard</option>
                        <option value = "chirst">Change Password</option>
                        <option value = "machu">Logout</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="back px-1"><a href="{{ route('admin/profile') }}">&#x21e6;Back</a></div>
        <div class="dashboard">
            <div class="update_info">
                <div class="header">Chhange Password</div>
                <div class="main_header">
                    <div class="sub_header">
                        <label for="old_password"><p>Old Password <span style="color: red">*</span></p></label>
                        <label for="new_password"><p>New Password <span style="color: red">*</span></p></label>
                        <label for="comfirm_password"><p>New Password Confirmation <span style="color: red">*</span></p></label>
                    </div>
                    <div class="detail">
                       <form action="" method="POST">
                            <div class="mb-4 m-2 ">
                                @csrf
                                <input type="password" name="old_password" id="old_password" required class="form-control shadow-none" autocomplete="off">
                            </div>
                            <div class="mb-4 m-2">
                                @csrf
                                <input type="password" name="new_password" id="new_password" required class="form-control shadow-none" autocomplete="off" >   
                            </div>
                            <div class="mb-4 m-2">
                                @csrf
                                <input type="password" name="comfirm_password" id="comfirm_password" class="form-control shadow-none" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary me-2 m-2">Save Change</button>
                        


                        {{-- <label class="wrapper_fill py-1">
                            <div class="fill_input">
                                
                                @csrf
                                <input type="password" placeholder="Input old password" name="old_password" id="old_password" value="{{ old('old_password') }}" required autocomplete="off" class="form-control
                                @error('old_password') is-invailid @enderror shadow-none">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </label>
                        <label class="wrapper_fill py-3">
                            <div class="fill_input">
                                <input type="password" placeholder="Input new password" name="new_password" id="new_password" value="{{ old('new_password') }}"  autocomplete="off" class="form-control
                                @error('new_password') is-invailid @enderror shadow-none">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </label>
                        <label class="wrapper_fill  py-3">
                            <div class="fill_input">
                                <input type="password" placeholder="Comfirm password" name="comfirm_password" id="comfirm_password" autocomplete="off" class="form-control
                                @error('comfirm_password') is-invailid @enderror shadow-none">
                            </div>
                        </label>
                        <label class="wrapper_fill  py-4">
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Save Change
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="model-sub-content d-flex flex-row-reverse p-3">
                                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-header p-0 m-0 justify-content-center border-0">
                                            <div class="modal-title fs-5 " id="exampleModalLabel">
                                                <img class="w-100 h-100" src="{{asset('image/key.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="modal-body justify-content-center py-0">
                                            <p class="text-center fs-4">Are you sure you want to change your passsword?</p> 
                                        </div>
                                        <div class="modal-footer justify-content-center border-0">
                                            <button type="button" class="btn text-light" data-bs-dismiss="modal" style="width: 90px; backgroundcolor: #F88017;" onmouseover="this.style.backgroundColor='#F88017'; onmouseout="this.style.backgroundColor='#FF8C00';>Close</button>
                                            <button type="button" class="btn btn-primary" style="width: 90px">Ok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </label> --}}
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
