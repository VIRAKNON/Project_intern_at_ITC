@extends('layout.app')
@section('createStudent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/createStudent.css')}}">
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
            
        </div>
    </div>
</body>
</html>
@endsection
