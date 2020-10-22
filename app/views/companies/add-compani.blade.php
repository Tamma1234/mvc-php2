@extends('layouts.main')

@section('title','Danh sách')

@section('content')


<div class="container">
    <h3 class="text-center text-infor">Tạo danh mục</h3>
    <form action="{{ BASE_URL . 'save-add-com'}}" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Adrress</label>
            <input type="text" class="form-control" name="adrress">
        </div>

        <div class="form-group">
            <label for="">Logo</label>
            <input type="file" class="form-control-file" name="logo">
        </div>
        <div class="form-group">
            <label for="">director_name</label>
            <input type="text" class="form-control" name="director_name">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-success">Lưu</button>
            <a href="{{BASE_URL }}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>

</div>

@endsection
