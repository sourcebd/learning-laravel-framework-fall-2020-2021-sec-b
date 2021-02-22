<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <h1>Hey {{ session('type') }}!</h1>
    <a href="{{route('home.create')}}">Create User</a> |
    <a href="{{route('home.userlist')}}">View User List</a> |
    <a href="{{route('login.index')}}">Logout</a>
</body>
</html>
