@extends('layouts.master')

@section('title','Cart')  

@section('content')
@csrf
	<!-- Page info -->
<div class="page-top-info" style="background-image: url({{asset('')}}img/banner-bg.jpg);">
            <div class="container">
                <h4>Your cart</h4>
                <div class="site-pagination">
                    <a href="/">Home</a> /
                    <a href="/cart">Your cart</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->
    
    
        <!-- checkout section  -->
	    <section class="checkout-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                    <form class="checkout-form" action="{{Route('cart.submit')}}" method="post">
                        @csrf
                            <div class="cf-title">Billing Address</div>
                            <div class="row">
                                <div class="col-md-7">
                                    <p>*Billing Information</p>
                                </div>
                            </div>
                            <div class="row address-inputs">
                                <div class="col-md-12">
                                    <input type="text" name='name' placeholder="Name" required>
                                    <input type="text" name='address' placeholder="Address" required>
                                    <input type="text" name='address_2' placeholder="Address line 2">
                                    <input type="text" name='city'placeholder="City" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name='zip' placeholder="Zip code" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name='phone' placeholder="Phone no." required>
                                </div>
                            </div>
                            <div class="cf-title">Delievery Info</div>
                            <div class="row shipping-btns">
                                <div class="col-6">
                                    <h4>Standard</h4>
                                </div>
                                <div class="col-6">
                                    <div class="cf-radio-btns">
                                        <div class="cfr-item">
                                            <input type="radio" name="shipping" id="ship-1" checked>
                                            <label for="ship-1">Free</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4>Quick Delivery</h4>
                                </div>
                                <div class="col-6">
                                    <div class="cf-radio-btns">
                                        <div class="cfr-item">
                                            <input type="radio" name="shipping" id="ship-2">
                                            <label for="ship-2">$3.45</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cf-title">Payment</div>
                            <ul class="payment-list">
                                <li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
                                <li>Pay when you get the package</li>
                            </ul>
                            <button class="site-btn submit-order-btn" type="submit">Place Order</button>
                        </form>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="checkout-cart">
                            <h3>Your Cart</h3>
                            <ul class="product-list">
                                    @foreach(Cart::content() as $item) 
                                        <li>
                                            <form method="POST" action="{{route('cart.update',['id'=>$item->rowId])}}" class="" >
                                            @csrf
                                            <div class="pl-thumb">
                                                <img src="{{$item->options->img}}" alt="">
                                            </div>
                                            <div class="pr-thumb">
                                                <h6>{{$item->name}}</h6>
                                                <p>${{$item->qty*$item->price}}</p>
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" name="amount" class="qty" value="{{$item->qty}}">
                                                        <input name="id" type="hidden" value="{{$item->rowId}}">
                                                        <input name="amount" type="hidden" class="valueqty" value="1">
                                                    </div>
                                                </div>
                                                <button type="submit" class="update-cart"><i class="fas fa-check"></i></button>
                                                <a href="{{route('cart.remove',['id'=>$item->rowId])}}"><i class="fas fa-trash"></i></a>
                                            </div>
                                            </form>    
                                        </li>
                                    @endforeach
                                
                            </ul>
                            <ul class="price-list">
                                <li>Shipping<span>free</span></li>
                                <li class="total">Total<span>${{Cart::total()}}</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- checkout section end -->
    
        <!-- Related product section -->
    <section class="related-product-section">
            <div class="container">
                <div class="section-title text-uppercase">
                    <h2>Continue Shopping</h2>
                </div>
                <div class="row">       
                    <div class="product-slider owl-carousel">
                        @foreach ($continue_shopping as $continue_shopping)
                        <div class="product-item">
                            <div class="pi-pic">
                                @if ($continue_shopping->amount>0)
                                    @if ($continue_shopping->check_new==1)
                                        <div class="tag-new">New</div>     
                                    @endif

                                    @if ($continue_shopping->check_hot==1)
                                        <div class="tag-hot">Hot</div>     
                                    @endif

                                    @if ($continue_shopping->product_sale>0)
                                        <div class="tag-sale">Sale {{$continue_shopping->product_sale}}%</div>     
                                    @endif
                                @else
                                    <div class="tag-sale">OUT STOCK</div>
                                @endif
                                
                                <img src="{{ Voyager::image( json_decode($continue_shopping->img)[0] ) }}" alt="">
                                <div class="pi-links">
                                @php
                                    $price = $continue_shopping->product_price - $continue_shopping->product_sale*$continue_shopping->product_price/100;
                                @endphp
                                    <form method="POST" action="{{route('cart.add')}}" class="" >
                                        @csrf
                                        <input name="id" type="hidden" value="{{$continue_shopping->product_id}}">
                                        <input name="name" type="hidden" value="{{$continue_shopping->product_name}}">
                                        <input name="amount" type="hidden" value="1">
                                        <input name="price" type="hidden" value="{{$price}}">
                                        <input type="hidden" name="img" value="{{ Voyager::image( json_decode($continue_shopping->img)[0] ) }}">
                                        <button type="submit" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></button>
                                    </form>                                                
                                    <a href="/product/{{$continue_shopping->product_id}}/{{Str::slug($continue_shopping->product_name)}}" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>${{$continue_shopping->product_price}}</h6>
                                <p>{{$continue_shopping->product_name}}</p>
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