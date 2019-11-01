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
    
    
        <!-- cart section end -->
        <section class="cart-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table">
                            <h3>Your Cart</h3>
                            <div class="cart-table-warp">
                                <table>
                                <thead>
                                    <tr>
                                        <th class="product-th">Product</th>
                                        <th class="quy-th">Quantity</th>
                                        <th class="total-th">Price</th>
                                        <th class="total-th">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(Cart::content() as $item) 
                                    <tr>
                                        <td class="product-col">
                                            <div class="pc-img">
                                                    <img src="{{$item->options->img}}" alt="">
                                            </div>
                                        
                                            <div class="pc-title">
                                                <h4>{{$item->name}}</h4>
                                                <p>${{number_format($item->price,0)}}</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$item->qty}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-col"><h4>${{$item->qty*$item->price}}</h4></td>
                                        <td class="remove">
                                            <a href="/cart-remove/{{$item->rowId}}"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="total-cost">
                                <h6>Total <span>${{Cart::total()}}</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 card-right">
                        <form class="promo-code-form">
                            <input type="text" placeholder="Enter promo code">
                            <button>Submit</button>
                        </form>
                        <a href="{{route('cart.checkout')}}" class="site-btn">Proceed to checkout</a>
                    <a href="{{route('shop')}}" class="site-btn sb-dark">Continue shopping</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart section end -->
    
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
                                    <a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
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