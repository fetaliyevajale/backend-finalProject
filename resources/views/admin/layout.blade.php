<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #a0d8ef, #3d7c91); 
            margin: 0;
            display: flex;
            height: 100vh;
            color: #333;
        }

        .sidebar {
            width: 250px;
            background-color: #3d7c91;
            padding: 20px;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            color: #a0d8ef;
        }

        .container {
            flex-grow: 1;
            padding: 20px;
            background: #ffffff;
            border-radius: 0 20px 20px 0;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3d7c91;
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.products.index') }}">Products</a></li>
            <li><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
            <li><a href="{{ route('admin.team.index') }}">Our Team</a></li>
        </ul>
    </div>
    
    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
</body>
</html>
