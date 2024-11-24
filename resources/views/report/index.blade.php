@extends('master')

@section('title', 'Reports')

@section('content')
    <h1>Data Reports</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Item Category</th>
            <th>Date</th>
            <th>Total</th>
        </tr>
        @foreach ($reports as $report)
            <tr>
                <td>{{ $report['item_code'] }}</td>
                <td>{{ $report['item_name'] }}</td>
                <td>{{ $report['item_category'] }}</td>
                <td>{{ $report['date'] }}</td>
                <td>{{ $report['total'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection