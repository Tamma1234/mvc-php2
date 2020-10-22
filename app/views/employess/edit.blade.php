@extends('layouts.main')

@section('title','Danh sách')

@section('content')


<div class="container">
    <h3 class="text-center text-infor">Sửa sản phẩm</h3>
    <form action="{{ BASE_URL . 'save-edit-form'}}" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="{{$employ->id}}" hidden>
        <div class="form-group">
            <label class="bold" for="">Tên danh mục</label>
            <input type="text" class="form-control" name="name" value="{{$employ->name}}">
        </div>
        <div class="form-group">
            <label for="">danh muc</label>
            <input type="text" class="form-control" name="company_id" value="{{$employ->company_id}}">
        </div>
        <div class="form-group">
            <label for="">danh muc</label>
            <input type="text" class="form-control" name="id_card_number" value="{{$employ->id_card_number}}">
        </div>
        <div class="form-group">
            <label for="">avatar</label>
            <input type="file" class="form-control-file" name="avatar" value="{{$employ->avatar}}">
        </div>
        <div class="form-group">
            <label for="">position</label>
            <input type="text" class="form-control" name="position" value="{{$employ->position}}">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-success">Lưu</button>
            <a href="{{BASE_URL }}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>

</div>

@endsection
