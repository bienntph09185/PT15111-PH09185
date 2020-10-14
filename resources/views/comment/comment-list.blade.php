@extends('admin-layout.master')
@section('title','Danh Sach')
@section('header','Header List')

<!-- //Thay đổi nội dung phức tạp -->
@section('content')
<h3 class="table-title">Danh sách bài viết</h3>
<table class="table table-striped" border="1px">
    <thead>
        <th>ID</th>
        <th>content</th>
        <th>student_id</th>
        <th>post_id</th>
        <th>status</th>
        <th>desc</th>
        <th>
            <a href="{{ route('students.create')}}"><button class="btn btn-success">Thêm mới</button></a>

        </th>
    </thead>

    <tbody>
        @foreach($comments as $comment)
        <tr>
            <td>{{$comment->id}}}</td>
            <td>{{$comment->content }}</td>
            <td>{{$comment -> student_id}}</td>
            <td>{{$comment -> post_id}}</td>
            <td>{{$comment -> status}}</td>
            <td>{{$comment -> post -> desc}}</td>
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