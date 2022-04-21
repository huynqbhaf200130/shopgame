@extends('user.layouts.master')
@section('content')
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:white;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->product_name }}</td>
                            <td>{{ $value->product_price}}</td>
                            <td><img src="{{ asset('img/'. $value->product_image) }}" alt=""></td>
                            <td>{{ $value->category_id}}</td>
                            <td>
                             <a href="{{asset('user/deletecart/'.$value->cart_id)}}" class="btn btn-warning">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
@stop