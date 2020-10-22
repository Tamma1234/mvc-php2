@extends('layouts.main')

@section('title','Danh sách')

@section('content')
    <table class="table">
        <thead>
              <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">company_id</th>
            <th scope="col">id_card_number</th>
            <th scope="col">avatar</th>
            <th scope="col">position	</th>
            <th scope="col"><a class="btn btn-primary" href="add-form">Thêm</a></th>
        </tr>
        </thead>

        <tbody>
        @foreach($employ as $item)
            <tr>
                <td scope="col">{{$item->id}}</td>
                <td scope="col">{{$item->name}}</td>
                <td scope="col">{{$item->company_id}}</td>
                <td scope="col">{{$item->	id_card_number}}</td>
                <td scope="col"><img src="{{$item->avatar}}" width="70px;" alt=""> </td>
                <td scope="col"> {{$item->position}}</td>
                <td scope="col">
                    <a class="btn btn-outline-success" href="{{ BASE_URL . 'edit-form?id=' . $item->id}}">Sua</a>
                    <a class="btn btn-outline-danger" href="{{ BASE_URL . 'remove-employ?id=' . $item->id}}">Xoa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
