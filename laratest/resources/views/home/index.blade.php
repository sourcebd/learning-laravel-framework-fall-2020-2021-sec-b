<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome home! {{ session('username') }} </h1>
    <h1>Hey {{ session('type') }}!</h1>
    <a href="/home/create">Create User</a> |
    <a href="/home/userlist">View User List</a> |
    <a href="/logout">Logout</a>
</body>
</html>
