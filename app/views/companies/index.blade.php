@extends('layouts.main')

@section('title','Danh sách')

@section('content')
    <table class="table">
        <thead>
              <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">address</th>
            <th scope="col">logo</th>
            <th scope="col">director_name</th>
            <th scope="col"><a class="btn btn-primary" href="add-com">Thêm</a></th>
        </tr>
        </thead>

        <tbody>
            @foreach($companies as $compa)
            <tr>
                <td scope="col">{{$compa->id}}</td>
                <td scope="col">{{$compa->name}}</td>
                <td scope="col">{{$compa->address}}</td>
                <td scope="col"><img src="{{$compa->logo}}" width="70px;" alt=""> </td>
                <td scope="col"> {{$compa->director_name}}</td>
                <td scope="col">
                    <a class="btn btn-outline-success" href="{{ BASE_URL . 'edit-compa?id=' . $compa->id}}">Sua</a>
                    <a class="btn btn-outline-danger" href="{{ BASE_URL . 'remove-com?id=' . $compa->id}}">Xoa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
