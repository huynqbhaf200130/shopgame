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
								Add category
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
											<form action="" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Category name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category name" name="category_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
                                                </div>
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="addcategory">Add</button>
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
                        <th>CategoryName</th>
                        <th>Description</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->category_name }}</td>
                            <td>{{ $value->description}}</td>
                            <td>
                                <a href="{{asset('admin/editcategory/'.$value->category_id)}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
								Edit
								</button></a>
                                <a href="{{asset('admin/deletecategory/'.$value->category_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            <!-- Modal -->
								<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Edit</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
											<form action="" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Category name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category name" name="category_name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
                                                </div>
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="addcategory">Add</button>
												</div>
                                            </form>
									</div>
									</div>
								</div>
								</div>
@stop