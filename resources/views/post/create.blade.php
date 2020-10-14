extends('admin-layout')

@section('title' , 'Create Post')

@section('content')

<form class="form-group" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">

    <div class="form-control"><input type="text" name="desc"></div>
    <div class="form-control"><input type="text" name="content"></div>
    <div class="form-control" put type="file" name="img"></div>
    <div class="form-control"><select name="student_id" id="">
            @foreach($studnets as $student)
            <option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-control">
        Publish
        <input type="radio" name="status" value="1">
    </div>
    <div class="form-control">
        UnPublish
        <input type="radio" name="status" value="0">
    </div>
    <div><button type="submit">SUBMIT</button></div>
</form>

@endsection