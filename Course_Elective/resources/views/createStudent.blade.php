@extends('layout.app')
@section('createStudent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/createStudent.css')}}">
    <script src="{{asset('js/studentAnnuals.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid bg-light vh-100">
        <header class="py-2">
            <span class="fs-3">Students</span>
            <span class="px-3 ">Register new student</span>
        </header>

        <div class="content">
            <div class="p-2 px-3 lead">
                <span>Register new student</span>
            </div>
            <hr>
            {{-- <div class="barTabs p-2">
                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'London')">
                        General Informatin
                    </button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">
                        New Academic Information <strong style="color: red; font-size:13px;">*</strong>
                    </button>
                </div>

                <div id="London" class="tabcontent">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p>
                </div>
            </div> --}}
            <div class="container mt-3">
                <h2>Toggleable Tabs</h2>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu1">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu2">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
