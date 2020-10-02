<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student</title>
</head>

<body>
    <header>
        <h1 class="header">Header List</h1>
    </header> -->
<!-- <div class="container"> -->
@extends('admin-layout.master')
@section('title','Danh Sach')
@section('header','Header List')

<!-- //Thay đổi nội dung phức tạp -->
@section('content')
<table class="table table-striped">
    <thead>
        <th class="text-wrap">ID</th>
        <th class="text-wrap">Tên</th>
        <th class="text-wrap">Age</th>
        <th class="text-wrap">Gender</th>
        <th class="text-wrap">Address</th>
        <th class="text-wrap">Active</th>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <th>{{$student->id}}</th>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>
                @if($student->gender == 0)
                Chưa Xác Định
                @elseif($student->gender == 1)
                Nam
                @else
                Nữ
                @endif
            </td>
            <td>{{$student->address}}</td>
            <td>{{$student->is_active == 0 ? 'No' : 'Yes'}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('footer','FOOTER-LIST')
<!-- </div> -->
<!-- <footer>
        <h1>Footerr List</h1>
    </footer>
</body>

</html> -->