@extends('master')

@section('title', 'User Management')

@section('content')
    <h1>Data Users</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['username'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection