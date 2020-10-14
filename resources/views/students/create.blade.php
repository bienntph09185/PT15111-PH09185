@extends('admin-layout.master')
@section('title','Sửa danh sách sinh viên')
@section('header','Header List')

@section('content')

<form method="POST" action="{{route('students.store') }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Tên<span class="text-danger">*</span></label>
                <input id="name" type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="age">Tuổi<span class="text-danger">*</span></label>
                <input id="age" type="text" class="form-control" name="age">

            </div>
            <div class="form-group">
                <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                <input id="address" type="text" class="form-control" name="address">

            </div>
            <div class="form-group">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input id="phone" type="text" class="form-control" name="phone">

            </div>
            <div class="form-group">
                <label for="">Giới Tính<span class="text-danger">*</span></label>
                Chưa Xác Định
                <input type="radio" name="gender" value="0" />
                Nam
                <input type="radio" name="gender" value="1" />
                Nữ
                <input type="radio" name="gender" value="2" />

            </div>
            <div class="form-group">
                <label>Status</label>
                Deactive
                <input type="radio" name="is_active" value="1" />
                Active
                <input type="radio" name="is_active" value="0" />


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
                <a href="" class="btn btn-danger">Hủy</a>
            </div>
        </div>
</form>
@endsection