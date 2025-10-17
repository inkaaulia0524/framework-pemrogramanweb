<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<head>
    <meta charset="UTF-8">
    <title>Laravel Routing</title>
</head>
<body>
    <h1>Selamat Datang di Laravel</h1>
    <ul>
        <li><a href="{{ route('hello') }}">Hello</a></li>
        <li><a href="{{ route('user', ['id' => 7]) }}">User ID</a></li>
        <li><a href="{{ route('guest') }}">Guest</a></li>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('redirect') }}">Redirect ke Profile</a></li>
        <li><a href="/admin/dashboard">Admin Dashboard</a></li>
        <li><a href="/admin/profile">Admin Profile</a></li>
    </ul>
</body>
</html>
