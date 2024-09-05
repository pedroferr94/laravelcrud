@extends('master.main')

@section('content')
    <div class="container">
        <div class="col-20">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col">User</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Deleted At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bicycles as $bicycle)
                    <tr>
                        <td>{{$bicycle->id}}</td>
                        <td>{{$bicycle->brand}}</td>
                        <td>{{$bicycle->model}}</td>
                        <td>{{$bicycle->color}}</td>
                        <td>{{$bicycle->price}}</td>
                        <td>{{$bicycle->user->first_name}}{{$bicycle->user->last_name}}</td>
                        <td>{{$bicycle->created_at}}</td>
                        <td>{{$bicycle->updated_at}}</td>
                        <td>{{$bicycle->deleted_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


