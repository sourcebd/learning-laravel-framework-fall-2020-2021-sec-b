@extends('layout/main')


@section('title')
USER LIST :: Epay.com
@endsection


@section('page_title')
<h1>User list</h1>
@endsection



@section('nav_bar')
<a href="/home">Back</a> |
<a href="/logout">logout</a>
@endsection


@section('main_content')
    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>Action</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['user_type'] }}</td>
            <td>
                <a href="{{ route('home.edit', [$list[$i]['id']]) }}">Edit</a> |
                <a href="/home/delete/{{ $list[$i]['id'] }}">Delete</a> |
                <a href="/home/details/{{ $list[$i]['id'] }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
@endsection