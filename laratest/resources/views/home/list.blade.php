<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>

    <h1>User List</h1>
    <a href="/home">Back</a> |
    <a href="/logout">Logout</a>
    <br><br>

    <table border="1" style="text-align:center">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>NAME</td>
            <td>TYPE</td>
            <td>ACTION</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['user_id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <a href="/home/edit/{{ $list[$i]['user_id'] }}">Edit</a> |
                <a href="/home/delete/{{ $list[$i]['user_id'] }}">Delete</a> |
                <a href="/home/details/{{ $list[$i]['user_id'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>