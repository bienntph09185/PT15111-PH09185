@extends('admin-layout.master')
@section('title','Sửa danh sách sinh viên')
@section('header','Header List')


@section('content')

<form id="" action="{{route('students.update', $student->id)}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Tên<span class="text-danger">*</span></label>
                <input id="name" type="text" class="form-control" name="name" value="{{$student->name}}">
            </div>

            <div class="form-group">
                <label for="age">Tuổi<span class="text-danger">*</span></label>
                <input id="age" type="text" class="form-control" name="age" value="{{$student->age}}">

            </div>
            <div class="form-group">
                <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                <input id="address" type="text" class="form-control" name="address" value="{{$student->address}}">

            </div>
            <div class="form-group">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input id="phone" type="text" class="form-control" name="phone" value="{{$student->phone}}">

            </div>
            <div class="form-group">
                <label for="">Giới Tính<span class="text-danger">*</span></label>
                Chưa Xác Định
                <input id="radio" type="radio" name="gender" value="0" checked="{{$student->gender==0}}">
                Nam
                <input id="radio" type="radio" name="gender" value="1" checked="{{$student->gender==1}}">
                Nữ
                <input id="radio" type="radio" name="gender" value="2" checked="{{$student->gender==2}}">

            </div>
            <div class="form-group">
                <label for="">Active<span class="text-danger">*</span></label>
                <input id="radio" type="radio" class="form-control" name="is_active" value="0" checked="{{$student->is_active==0}}">
                <input id="radio" type="radio" class="form-control" name="is_active" value="1" checked="{{$student->is_active==1}}">



            </div>
            <!-- <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="" id="preview-img" class="img-fluid">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Ảnh tin</label>
                    <input type="file" class="form-control" name="feature_img" onchange="encodeImageFileAsURL(this)">
                </div>

            </div> -->
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>&nbsp;
                <a href="<" class="btn btn-danger">Hủy</a>
            </div>
        </div>
</form>
@endsection