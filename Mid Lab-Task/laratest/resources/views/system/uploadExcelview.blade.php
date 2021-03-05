@extends('layout.main')

@section('title')
    Home | Upload Excel
@endsection

@section('page_title')
    <h1>Upload Excel</h1>
@endsection

@section('nav_bar')
<a href="{{route('system.salesLog')}}">View Sales Log</a> |
    <br>
@endsection

@section('main_content')
    <center>

    {{session('msg')}}
    <br>
        <h1>Upload Excel</h1>
        <br>
        <br>
        <br>
        <form action="" method="POST" enctype= "multipart/form-data">
            @csrf
            <input type="file" name='file'>
            <input type="submit" value="Submit">
        </form>
    </center>
@endsection