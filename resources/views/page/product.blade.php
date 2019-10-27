@extends('layouts.master')

@section('title','Product')  

@section('content')
@csrf

	<!-- product section -->
	<section class="product-section">
            <div class="container">
                <div class="back-link">
                    <a href="/shop"> &lt;&lt; Back to Shop Page</a>
                </div>
                <div class="row">
                    @foreach ($prd_by_id as $prd_by_id)
                        <div class="col-lg-6">   
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{ Voyager::image( json_decode($prd_by_id->img)[0] ) }}" alt="">
                            </div>
                            <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                                <div class="product-thumbs-track">
                                        @for ($i = 0; $i < count(json_decode($prd_by_id->img)); $i++)
                                            @if ($i==0)
                                                <div class="pt active" data-imgbigurl="{{ Voyager::image( json_decode($prd_by_id->img)[$i] ) }}">
                                                    <img src="{{ Voyager::image( json_decode($prd_by_id->img)[$i] ) }}" alt="">
                                                </div>
                                                
                                            @else
                                            <div class="pt" data-imgbigurl="{{ Voyager::image( json_decode($prd_by_id->img)[$i] ) }}"><img src="{{ Voyager::image( json_decode($prd_by_id->img)[$i] ) }}" alt=""></div>
                                            @endif
                                                
                                        @endfor
                                </div>
                            </div>
                        </div> 
                    @endforeach
                    
                    <div class="col-lg-6 product-details">
                        <h2 class="p-title">{{$prd_by_id->product_name}}</h2>
                        <h3 class="p-price">
                            <span class="f-price">${{ $prd_by_id->product_price - $prd_by_id->product_sale*$prd_by_id->product_price/100 }} </span> 
                            <span class="s-price">${{ $prd_by_id->product_price }} </span>
                        </h3>

                        @if ($prd_by_id->amount > 0)
                        <h4 class="p-stock">Available: <span>In Stock</span></h4>
                        @else
                        <h4 class="p-stock">Available: <span>Out Stock</span></h4>
                        @endif
                        
                        {{-- <div class="p-rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o fa-fade"></i>
                        </div> --}}

                        <div class="p-review">
                            <a href="">3 reviews</a>
                        </div>

                        <div class="quantity">
                            <p>Quantity</p>
                            <div class="pro-qty"><input type="text" class="qty" value="1"></div>
                        </div>
                        @php
                            $price = $prd_by_id->product_price - $prd_by_id->product_sale*$prd_by_id->product_price/100;
                        @endphp
                            <form method="POST" action="{{route('cart.add')}}" class="" >
                                @csrf
                                <input name="id" type="hidden" value="{{$prd_by_id->product_id}}">
                                <input name="name" type="hidden" value="{{$prd_by_id->product_name}}">
                                <input name="amount" type="hidden" class="valueqty" value="1">
                                <input name="price" type="hidden" value="{{$price}}">
                                <input type="hidden" name="img" value="{{ Voyager::image( json_decode($prd_by_id->img)[0] ) }}">
                                <button type="submit" class="site-btn">BUY NOW</button>
                            </form>                                                
                        <div id="accordion" class="accordion-area">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p><?=$prd_by_id->full_detail?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h4>7 Days Returns</h4>
                                        <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-sharing">
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->
    
    <!-- Related product section -->
    <section class="related-product-section">
            <div class="container">
                <div class="section-title text-uppercase">
                    <h2>Continue Shopping</h2>
                </div>
                <div class="row">       
                    <div class="product-slider owl-carousel">
                        @foreach ($new_prd_page as $new_prd_page)
                        <div class="product-item">
                            <div class="pi-pic">
                                @if ($new_prd_page->amount>0)
                                    @if ($new_prd_page->check_new==1)
                                        <div class="tag-new">New</div>     
                                    @endif

                                    @if ($new_prd_page->check_hot==1)
                                        <div class="tag-hot">Hot</div>     
                                    @endif

                                    @if ($new_prd_page->product_sale>0)
                                        <div class="tag-sale">Sale {{$new_prd_page->product_sale}}%</div>     
                                    @endif
                                @else
                                    <div class="tag-sale">OUT STOCK</div>
                                @endif
                                
                                <img src="{{ Voyager::image( json_decode($new_prd_page->img)[0] ) }}" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
                                    <a href="/product/{{$new_prd_page->product_id}}/{{Str::slug($new_prd_page->product_name)}}" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>${{$new_prd_page->product_price}}</h6>
                                <p>{{$new_prd_page->product_name}}</p>
                            </div>
                        </div>
                        @endforeach       
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Related product section end -->
    
        @endsection