@extends('layouts.master')

@section('title','Shop')  

@section('content')

@csrf
    
	@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
	<!-- Category section -->
	<section class="category-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="filter-widget">
                            <h2 class="fw-title">Categories</h2>
                            <ul class="category-menu">
                                @foreach (App\Category::all() as $category)
                                <li><a href="{{route('shop',['category'=>$category->product_type_id])}}">{{ $category->product_type_name }}</a></li>
                                {{-- {{ $category->product_type_id }}/{{Str::slug($category->product_type_name)}} --}}
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
                        <div class="filter-widget">
                            <h2 class="fw-title">Sorting</h2>
                            <ul class="category-menu">
                            <li><a href="{{route('shop',['category'=>request()->category,'sort'=>'L_H','page'=>request()->page])}}">Price Low to High</a></li>
                                <li><a href="{{route('shop',['category'=>request()->category,'sort'=>'H_L','page'=>request()->page])}}">Price High to Low</a></li>
                                <li><a href="{{route('shop',['category'=>request()->category,'name'=>'A_Z','page'=>request()->page])}}">Name A -> Z</a></li>
                                <li><a href="{{route('shop',['category'=>request()->category,'name'=>'Z_A','page'=>request()->page])}}">Name Z -> A</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="row">

                           
                            @foreach ($ctgs as $ctg)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        @if ($ctg->amount>0)
                                            @if ($ctg->check_new==1)
                                                <div class="tag-new">New</div>     
                                            @endif

                                            @if ($ctg->check_hot==1)
                                                <div class="tag-hot">Hot</div>     
                                            @endif

                                            @if ($ctg->product_sale>0)
                                                <div class="tag-sale">Sale {{$ctg->product_sale}}%</div>     
                                            @endif
                                        @else
                                            <div class="tag-sale">OUT STOCK</div>
                                        @endif
                                        
                                        <img src="{{ Voyager::image( json_decode($ctg->img)[0] ) }}" alt="">
                                        <div class="pi-links">
                                        @php
                                            $price = $ctg->product_price - $ctg->product_sale*$ctg->product_price/100;
                                        @endphp
                                            <form method="POST" action="{{route('cart.add')}}" class="" >
                                                @csrf
                                                <input name="id" type="hidden" value="{{$ctg->product_id}}">
                                                <input name="name" type="hidden" value="{{$ctg->product_name}}">
                                                <input name="amount" type="hidden" value="1">
                                                <input name="price" type="hidden" value="{{$price}}">
                                                <input type="hidden" name="img" value="{{ Voyager::image( json_decode($ctg->img)[0] ) }}">
                                                <button type="submit" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></button>
                                            </form>                                                
                                            <a href="/product/{{$ctg->product_id}}/{{Str::slug($ctg->product_name)}}" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
                                        </div>
                                        </div>
                                        <div class="pi-text">
                                            <h6>${{ $ctg->product_price - $ctg->product_sale*$ctg->product_price/100 }}</h6>
                                            <p>{{$ctg->product_name}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <div class="text-center w-100 pt-3">
                                    {{ $ctgs->appends(request()->input())->links() }}                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Category section end -->

    
@endsection