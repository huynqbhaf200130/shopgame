@extends('user.layouts.master')
@section('content')
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style type="text/css">
        .carousel-inner img {
            width: 100%;
            height: 450px;
        }
    </style>
</head>
<body>
    <div style="margin-top: 50px" class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cdn.nguyenkimmall.com/images/companies/_1/tin-tuc/review/game/pubg-playerunknown%E2%80%99s-battlegrounds.jpg" alt="" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://wall.vn/wp-content/uploads/2020/04/hinh-nen-game-dep-12.jpg" alt="" width="1100" height="500">   
            </div>
            <div class="carousel-item">
                <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2021/07/gioi-thieu-new-world-1.jpg" alt="" width="1100" height="500">  
            </div>
            <div class="carousel-item">
                <img src="https://haycafe.vn/wp-content/uploads/2021/11/Hinh-anh-Truy-Kich-dep-chat-nhat.jpg" alt="" width="1100" height="500"> 
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
</body>
</html>

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
                                                    <button>add to cart</button>
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
