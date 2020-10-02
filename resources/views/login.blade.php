<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <header>
        <h1 class="header">Header Login</h1>
    </header> -->
<!-- <div class="container"> -->
@extends('student-layout.master')
@section('title','Login')
@section('header','Header Login')
@section('navbar','Đây là NAV')
@section('content')
<form class="form-group" action="{{route('post-login')}}" method="POST">
    @csrf
    <input class="form-control" name="username" type="text" placeholder="Nhập usernam">
    <input class="form-control" name="password" type="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>
@endsection
@section('footer','FOOTER LOGIN')
<!-- </div> -->
<!-- <footer>Footer Login</footer>
</body>

</html> -->