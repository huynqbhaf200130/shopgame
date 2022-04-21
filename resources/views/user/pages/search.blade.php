@extends('user.layouts.master')
@section('content')
<!--Main layout-->
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
                                        <a href="{{asset('admin/product-details/'.$pro->product_id)}}"><img src="{{ asset('img/'. $pro->product_image) }}" alt=""></a>
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
  <!--Main layout-->
  @stop