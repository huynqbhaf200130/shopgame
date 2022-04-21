@extends('user.layouts.master')
@section('content')
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<center><div class="carousel-inner">
  <div class="carousel-item active">
    <img src="{{asset('img/hero/hero-1.jpg')}}" alt="Los Angeles">
  </div>
  <div class="carousel-item">
    <img src="{{asset('img/hero/hero-1.jpg')}}" alt="Chicago">
  </div>
  <div class="carousel-item">
    <img src="{{asset('img/hero/hero-1.jpg')}}" alt="New York">
  </div>
</div></center>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            @foreach($products as $pro)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../img/{{$pro['product_image']}}">
                                        <a href="{{asset('admin/product-details/'.$pro->product_id)}}"><img src="../img/{{$pro['product_image']}}" alt=""></a>
                                        <div class="ep">Cao cấp</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul class="tren">
                                            <li>Hot</li>
                                            <li>Rẻ</li>
                                        </ul>
                                        <ul class="duoi">
                                            <li><h5><a href="#">{{$pro->product_name}}</a></h5></li>
                                            <li>
                                                <form action="{{ URL('user/cart')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$pro->product_id}}" name="product_id">
                                                    <input type="hidden" value="1" name="quantity">
                                                    <button>add</button>
                                                </form>
                                            </li>
                                        </ul>
                                        <h6 style="color:white">{{$pro->product_price}}$</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Product Section End -->
@stop
