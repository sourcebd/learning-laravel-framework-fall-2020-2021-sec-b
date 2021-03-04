@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome Home! <br> {{ session('email') }} </h1>
@endsection


@section('title')
Home
@endsection

@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('home.create')}}">Create User</a> |
<a href="{{route('home.userlist')}}">User List</a> |
<a href="{{route('system.physicalStore')}}">Physical Store</a> |
<a href="{{route('system.socialMedia')}}">Social Media</a> |
<a href="{{route('system.ecommerce')}}">E-Commerce Web App</a> |
@endsection