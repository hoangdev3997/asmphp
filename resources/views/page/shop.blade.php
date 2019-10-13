@extends('layouts.master')

@section('title','Shop')  

@section('content')


	<!-- Category section -->
	<section class="category-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="filter-widget">
                            <h2 class="fw-title">Categories</h2>
                            <ul class="category-menu">
                                @foreach (App\Category::all() as $category)
                                <li><a href="/shop/type={{ $category->product_type_id }}">{{ $category->product_type_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="filter-widget mb-0">
                            <h2 class="fw-title">refine by</h2>
                            <div class="price-range-wrap">
                                <h4>Price</h4>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
                                    </span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
                                    </span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="row">

                            
                            @foreach ($ctg as $ctg)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        @if ($ctg->check_new==1)
                                        <div class="tag-new">New</div>     
                                        @endif
                                        @if ($ctg->check_hot==1)
                                        <div class="tag-hot">Hot</div>     
                                        @endif
                                        @if ($ctg->product_sale>0)
                                        <div class="tag-sale">Sale {{$ctg->product_sale}}%</div>     
                                        @endif
                                        <img src="{{ Voyager::image( json_decode($ctg->img)[0] ) }}" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>${{$ctg->product_price}}</h6>
                                        <p>{{$ctg->product_name}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                               

                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="tag-sale">ON SALE</div>
                                        <img src="{{asset('')}}img/product/6.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Black and White Stripes Dress</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/7.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/8.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/10.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Black and White Stripes Dress</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/11.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/12.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/5.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/9.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/1.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <div class="tag-new">new</div>
                                        <img src="{{asset('')}}img/product/2.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Black and White Stripes Dress</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/3.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('')}}img/product/4.jpg" alt="">
                                        <div class="pi-links">
                                            <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                            <a href="#" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                    </div>
                                    <div class="pi-text">
                                        <h6>$35,00</h6>
                                        <p>Flamboyant Pink Top </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-100 pt-3">
                                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category section end -->
    
    
@endsection