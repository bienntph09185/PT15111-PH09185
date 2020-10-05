@extends('admin-layout.master')

@section('title','Chi Tiet Sinh Vien')

@section('content')


<h3 class="table-title">Danh sách sinh viên</h3>
<table class="table table-striped" border="1px">
    <thead>
        <th class="text-wrap">ID</th>
        <th class="text-wrap">Tên</th>
        <th class="text-wrap">Age</th>
        <th class="text-wrap">Gender</th>
        <th class="text-wrap">Address</th>
        <th class="text-wrap">Active</th>
    </thead>

    <tbody>
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
            @if($student->is_active == 0)
            <td class="btn btn-success">Yes</td>
            @else
            <td class="btn btn-danger">No</td>
            @endif
        </tr>
    </tbody>
</table>

@endsection('content')