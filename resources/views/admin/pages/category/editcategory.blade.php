@extends('admin.layouts.master')
@section('content')
<center>
    
<form role ="form" action="" method="post" style="width:40%">
                    @csrf
                    <fieldset class="form-group">
                        <label  style="color:white">Name</label>
                        <input class="form-control" name="category_name" placeholder="Nhập tên category" value="{{$data->category_name}}">
                        <label  style="color:white">Description</label>
                        <input class="form-control" name="description" placeholder="Nhập tên category" value="{{$data->description}}">
                    </fieldset>
                    <button type="submit" class="btn btn-success">Edit</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
</center>
@stop