@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome home! {{ session('email') }} </h1>
@endsection



@section('title')
Home | ABC.com
@endsection