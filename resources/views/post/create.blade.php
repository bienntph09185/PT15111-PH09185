@extends('admin-layout.master')

@section('title' , 'Create Post')

@section('content')
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form class="form-group" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-control"><input type="text" name="desc" placeholder="Giới thiệu"></div>
    <div class="form-control"><input type="text" name="content" placeholder="Content"></div>
    <div class="form-control"><input type="file" name="img"></div>
    <div class="form-control"><select name="student_id" id="">
            @foreach($students as $student)
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