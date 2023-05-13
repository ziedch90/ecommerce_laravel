@extends('layoutsfront.template')
@section('content')

<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="shop-top-bar">
                    <div class="select-shoing-wrap">
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                        <p>Showing 1–12 of 20 result</p>
                    </div>
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-1" data-bs-toggle="tab">
                            <i class="fa fa-table"></i>
                        </a>
                        <a href="#shop-2" data-bs-toggle="tab">
                            <i class="fa fa-list-ul"></i>
                        </a>
                    </div>
                </div>
                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">

                                @forelse ($products as $product )
                                <div class="col-xl-3 col-md-4 col-lg-4 col-sm-6">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">
                                            <a href="product-details.html">
                                                <img class="default-img" src="{{ asset('images/produits/'.$product->photo)}}" alt="">
                                                <img class="hover-img" src="{{ asset('images/produits/'.$product->photo)}}" alt="">
                                            </a>
                                            <!--span class="purple">New</!--span-->
                                            <div class="product-action">
                                                <div class="pro-same-action pro-wishlist">
                                                    <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                </div>
                                                <div class="pro-same-action pro-cart">
                                                    <a title="Add To Cart" onclick="addtocart({{$product->id}},'{{$product->name}}',{{$product->price}},1,'{{$product->photo}}')" href="javascript:;"><i class="pe-7s-cart"></i> Add to cart</a>
                                                </div>
                                                <div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h3><a href="product-details.html">{{$product->name}}</a></h3>
                                            <div class="product-rating">
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>{{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                            <div class="col-12 text-center">pas de produits pour le moment</div>
                                @endforelse


                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-1.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-1-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-10%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="#">Products Name Here</a></h3>
                                            <div class="product-list-price">
                                                <span>$ 60.00</span>
                                                <span class="old">$ 90.00</span>
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a href="#">3 Reviews</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="#">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-2.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-2-1.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="#">Products Name Here</a></h3>
                                            <div class="product-list-price">
                                                <span>$ 60.00</span>
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a href="#">3 Reviews</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="#">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-3.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-3-1.jpg" alt="">
                                                </a>
                                                <span class="pink">-20%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Products Name Here</a></h3>
                                            <div class="product-list-price">
                                                <span>$ 30.00</span>
                                                <span class="old">$ 50.00</span>
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a href="#">3 Reviews</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="#">ADD TO CARTt</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                        <div class="product-wrap">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="assets/img/product/pro-7.jpg" alt="">
                                                    <img class="hover-img" src="assets/img/product/pro-4-1.jpg" alt="">
                                                </a>
                                                <span class="purple">New</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6">
                                        <div class="shop-list-content">
                                            <h3><a href="product-details.html">Products Name Here</a></h3>
                                            <div class="product-list-price">
                                                <span>$ 70.00</span>
                                            </div>
                                            <div class="rating-review">
                                                <div class="product-list-rating">
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o yellow"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <a href="#">3 Reviews</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consecteto adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua Ut enim ad minim </p>
                                            <div class="shop-list-btn btn-hover">
                                                <a href="#">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-pagination-style text-center mt-30">
                        <ul>
                            <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
