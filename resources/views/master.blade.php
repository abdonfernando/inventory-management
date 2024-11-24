<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SADS')</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic body styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #ccc;
            text-decoration: none;
            padding: 10px 0;
            border-bottom: 1px solid #444;
        }

        .sidebar a:hover {
            color: #fff;
        }

        /* Main content styling */
        .content {
            flex: 1;
            padding: 20px;
            background-color: #f4f4f9;
        }

        .content h1 {
            font-size: 24px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sistem Manajemen Inventori</h2>
        <a href="{{ url('/users') }}">User</a>
        <a href="{{ url('/categories') }}">Category</a>
        <a href="{{ url('/items') }}">Item</a>
        <a href="{{ url('/reports') }}">Report</a>
    </div>

    <div class="content">
        @yield('content', '')
    </div>
</body>

</html>