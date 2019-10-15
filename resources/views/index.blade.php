
@extends('layouts.master')

@section('title','Home')  

@section('content')

@csrf
   <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span>New Arrivals</span>
                            <h2>denim jackets</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="#" class="site-btn sb-line">DISCOVER</a>
                            <a href="#" class="site-btn sb-white">ADD TO CART</a>
                        </div>
                    </div>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h2>$29</h2>
                        <p>SHOP NOW</p>
                    </div>
                </div>
            </div>
			<div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg-3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg-4.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('')}}img/bg-5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
            </div>
            
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('')}}img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('')}}img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('')}}img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
					@foreach ($new_prd as $new_prd)
					<div class="product-item">
						<div class="pi-pic">
							@if ($new_prd->amount>0)
								@if ($new_prd->check_new==1)
									<div class="tag-new">New</div>     
								@endif

								@if ($new_prd->check_hot==1)
									<div class="tag-hot">Hot</div>     
								@endif

								@if ($new_prd->product_sale>0)
									<div class="tag-sale">Sale {{$new_prd->product_sale}}%</div>     
								@endif
							@else
								<div class="tag-sale">OUT STOCK</div>
							@endif
							
							<img src="{{ Voyager::image( json_decode($new_prd->img)[0] ) }}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
								<a href="/shop/product/{{$new_prd->product_id}}" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>${{$new_prd->product_price}}</h6>
							<p>{{$new_prd->product_name}}</p>
						</div>
					</div>
					@endforeach       
				</div>
	</section>
	<!-- letest product section end -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<div class="row " id="top">
					@foreach ($top_prd as $top_prd)
					<div class="col-lg-3 col-sm-6">
						<div class="product-item">
							<div class="pi-pic">
								@if ($top_prd->amount>0)
									@if ($top_prd->check_new==1)
										<div class="tag-new">New</div>     
									@endif

									@if ($top_prd->check_hot==1)
										<div class="tag-hot">Hot</div>     
									@endif

									@if ($top_prd->product_sale>0)
										<div class="tag-sale">Sale {{$top_prd->product_sale}}%</div>     
									@endif
								@else
									<div class="tag-sale">OUT STOCK</div>
								@endif
								
								<img src="{{ Voyager::image( json_decode($top_prd->img)[0] ) }}" alt="">
								<div class="pi-links">
									<a href="#" class="add-card"><i class="fas fa-shopping-bag"></i><span>ADD TO CART</span></a>
									<a href="/shop/product/{{$top_prd->product_id}}" class="wishlist-btn"><i class="far fa-eye"></i><span>VIEW MORE</span></a>
								</div>
							</div>
							<div class="pi-text">
								<h6>${{$top_prd->product_price}}</h6>
								<p>{{$top_prd->product_name}}</p>
							</div>
						</div>
					</div>
					@endforeach

				{{-- <div class="col-lg-3 col-sm-6">
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
				</div> --}}
			</div>

			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="{{asset('')}}img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


@endsection