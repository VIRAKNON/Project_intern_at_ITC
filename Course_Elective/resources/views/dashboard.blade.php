@extends('layout.app')
@section('dashboard')
<div class="sub_right">
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
</div>
@endsection
