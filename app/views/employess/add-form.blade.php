@extends('layouts.main')

@section('title','Danh sách')

@section('content')


<div class="container">
    <h3 class="text-center text-infor">Tạo danh mục</h3>
    <form action="{{ BASE_URL . 'save-add-form'}}" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">danh muc</label>
            <input type="text" class="form-control" name="company_id">
        </div>
        <div class="form-group">
            <label for="">danh muc</label>
            <input type="text" class="form-control" name="id_card_number">
        </div>
        <div class="form-group">
            <label for="">avatar</label>    
            <input type="file" class="form-control-file" name="avatar">
        </div>
        <div class="form-group">
            <label for="">position</label>
            <input type="text" class="form-control" name="position">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-success">Lưu</button>
            <a href="{{BASE_URL }}" class="btn btn-sm btn-danger">Hủy</a>
        </div>
    </form>

</div>

@endsection
