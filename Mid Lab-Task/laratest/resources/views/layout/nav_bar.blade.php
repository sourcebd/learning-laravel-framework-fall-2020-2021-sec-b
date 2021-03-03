@extends('layout.main')


@section('nav_bar')
<a href="{{route('logout.index')}}">Logout</a> |
<a href="{{route('home.index')}}">Home</a> |
<a href="{{route('system.physicalStore')}}">Physical Store</a> |
<a href="{{route('system.socialMedia')}}">Social Media</a> |
<a href="{{route('system.ecommerce')}}">E-Commerce Web App</a> |
@endsection
