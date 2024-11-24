@extends('master')

@section('title', 'Item Management')

@section('content')
    <h1>Data Items</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item['code'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['stock'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection