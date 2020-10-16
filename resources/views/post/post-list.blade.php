@extends('admin-layout.master')
@section('title','Danh Sach')
@section('header','Header List')

<!-- //Thay đổi nội dung phức tạp -->
@section('content')
<h3 class="table-title">Danh sách bài viết</h3>
<table class="table table-striped" border="1px">
    <thead>
        <th>ID</th>
        <th>Student</th>
        <th>Desc</th>
        <th>content</th>
        <th>image_url</th>
        <th>status</th>
        <th>
            <a href="{{ route('posts.create')}}"><button class="btn btn-success">Thêm mới</button></a>

        </th>
    </thead>

    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->student->name}}</td>
            <td>{{$post -> desc}}</td>
            <td>{{$post -> content}}</td>
            <td><img src="{{ substr($post->img_url, 0, 4) == 'http' ? $post->img_url : asset($post->img_url) }}" height="50" /> </td>
            @if($post->status == 0)
            <td class="btn btn-success">Yes</td>
            @else
            <td class="btn btn-danger">No</td>
            @endif
        </tr>
        @endforeach
        <!-- <tr>
            <td colspan="2">{{$posts->links()}}</td>
        </tr> -->
        <!-- <tr>
            <td>
                <form action="">
                    <a href="{{route('students.edit',$post->id)}}" class="btn btn-sm btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('students.destroy',$post->id)}}" method="POST">@csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn-remove btn btn-sm btn-danger">Delete</button>
                    </form>
                    <!-- <a href="{{ route('students.destroy',$post->id)}}" class="btn-remove btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                </a> -->
        <!-- </td>
        </tr> -->
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