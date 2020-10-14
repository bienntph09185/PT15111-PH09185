@extends('admin-layout.master')
@section('title','Danh Sach')
@section('header','Header List')

<!-- //Thay đổi nội dung phức tạp -->
@section('content')
<h3 class="table-title">Danh sách bài viết</h3>
<table class="table table-striped" border="1px">
    <thead>
        <th>ID</th>
        <th>name</th>
        <th>status</th>
        <th>Số lượng</th>

        <th>
            <a href="{{ route('students.create')}}"><button class="btn btn-success">Thêm mới</button></a>

        </th>
    </thead>

    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}}</td>
            <td>{{$category -> name}}</td>
            <td>{{$category -> status}}</td>
            <td>{{count($category -> posts) }}</td>
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