@extends('master')

@section('title', 'Item Categories')

@section('content')
    <h1>Data Categories</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category['name'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection