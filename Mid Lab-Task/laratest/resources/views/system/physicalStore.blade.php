@extends('layout.nav_bar')


@section('page_title')    
<h1>Physical Store <br> {{ session('email') }} </h1>
@endsection


@section('main_content')
    <center><h1>Sold Items of last 7 Days</h1></center>

    No. of Products:&nbsp;&nbsp;
    {{$seven}} <br><br>

    Average Unit Price:&nbsp;&nbsp;
    {{$avg}} <br><br>

    Product with Max number:&nbsp;&nbsp;
    {{$max}} <br><br>

    <table border="1">

        <tr>
            <td>Id</td>
            <td>Customer Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
            <td>Created At</td>
            <td>Updated At</td>

        </tr>

            @foreach ($list as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['customer_name']}}</td>
                <td>{{$i['customer_address']}}</td>
                <td>{{$i['phone']}}</td>
                <td>{{$i['product_id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['quantity']}}</td>
                <td>{{$i['total_price']}}</td>
                <td>{{$i['date_sold']}}</td>
                <td>{{$i['payment_type']}}</td>
                <td>{{$i['status']}}</td>
                <td>{{$i['created_at']}}</td>
                <td>{{$i['updated_at']}}</td>
            </tr>
            @endforeach     
    </table>

    <center><h1><h1>Sold Items of 1 Month</h1></h1></center>

    No. of Products:&nbsp;&nbsp;
    {{$thirty}} <br><br>

    Average Unit Price:&nbsp;&nbsp;
    {{$avg1}} <br><br>

    Product with Max number:&nbsp;&nbsp;
    {{$max1}} <br><br>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Customer Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>
        
            @foreach ($sold as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['customer_name']}}</td>
                <td>{{$i['customer_address']}}</td>
                <td>{{$i['phone']}}</td>
                <td>{{$i['product_id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['quantity']}}</td>
                <td>{{$i['total_price']}}</td>
                <td>{{$i['date_sold']}}</td>
                <td>{{$i['payment_type']}}</td>
                <td>{{$i['status']}}</td>
                <td>{{$i['created_at']}}</td>
                <td>{{$i['updated_at']}}</td>
            </tr>
            @endforeach

            
    </table>

@endsection 

@section('title')
Home | Physical Store
@endsection