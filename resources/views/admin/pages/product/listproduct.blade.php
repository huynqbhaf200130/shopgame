@extends('admin.layouts.master')
@section('content')  
<main style="margin-top:70px">
							<div class="container-fluid">
								<div class="row">
									
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Add product
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
											<form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product name" name="product_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product price</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="product_price">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Image" name="product_image">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="product_des">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Category</label>
                                                    <select name="category_id" id="category_id">
                                                        <option value=""></option>
                                                        @foreach($category as $key)
                                                        <option value="{{$key->category_id}}">{{$key->category_name}}</option>
                                                        @endforeach
                                                    </select>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="addproduct">Add</button>
												</div>
                                            </form>
									</div>
									</div>
								</div>
								</div>
							</div>
								</div>
							</div>
						</main>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:white;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->product_name }}</td>
                            <td>{{ $value->product_price}}</td>
                            <td><img src="../img/{{$value['product_image']}}" alt=""></td>
                            <td>{{ $value->product_des}}</td>
                            <td>{{ $value->category_id}}</td>
                            <td>
                               <a href="{{asset('admin/edit/'.$value->user_id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                               <a href="{{asset('admin/delete/'.$value->user_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

@stop