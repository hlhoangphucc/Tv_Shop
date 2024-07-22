@extends('welcome')
@section('content')

<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                        @foreach($search_product as $key => $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        
                                        <div class="productinfo text-center">
                                            <img src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="" />
                                            <h2>{{number_format($product->product_price).' '.'VND'}}</h2>
                                            <p>{{$product->product_name}}</p>
                                            <a href="#" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$product->product_id}}><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                        </div>
                                       
                                </div>

                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>{{-- features_items --}}

<!--/recommended_items-->   
@endsection                                    