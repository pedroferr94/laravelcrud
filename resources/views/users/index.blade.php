@extends('master.main')

@section('content')
    <div class="container">
        <div class="col-20">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Country</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Deleted At</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->country->name}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->birth_date}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>{{$user->deleted_at}}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

