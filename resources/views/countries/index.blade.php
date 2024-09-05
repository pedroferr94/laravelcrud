@extends('master.main')

@section('content')
    <div class="container">
        <div class="col-20">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Country ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Users</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Deleted At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                    <td>{{$country->id}}</td>
                    <td>{{$country->name}}</td>
                    <td>
                        @foreach($country->users as $user)
                            <li>{{$user->first_name}} {{$user->last_name}}</li>
                        @endforeach
                    </td>
                    <td>{{$country->created_at}}</td>
                    <td>{{$country->updated_at}}</td>
                    <td>{{$country->deleted_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

