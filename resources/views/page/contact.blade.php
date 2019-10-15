@extends('layouts.master')

@section('title','Contact')  

@section('content')
@csrf
	<!-- Page info -->
	<div class="page-top-info">
            <div class="container">
                <h4>Contact</h4>
                <div class="site-pagination">
                    <a href="/">Home</a> /
                    <a href="/contact">Contact</a>
                </div>
            </div>
        </div>
        <!-- Page info end -->
    
    
        <!-- Contact section -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 contact-info">
                        <h3>Get in touch</h3>
                        <p>118 Quốc lộ 13 cũ, Hiệp Bình Phước, Thủ Đức, TP. HCM</p>
                        <p>+84 965 960 207</p>
                        <p>huyhoang.dev.997@gmail.com</p>
                        <div class="contact-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <form class="contact-form">
                            <input type="text" placeholder="Your name">
                            <input type="text" placeholder="Your e-mail">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Message"></textarea>
                            <button class="site-btn">SEND NOW</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3245538896576!2d106.7192060152606!3d10.862900760560875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752808682896b1%3A0x4b1e0a5c9046998!2zMTE4IFF14buRYyBs4buZIDEzIGPFqSwgSGnhu4dwIELDrG5oIFBoxrDhu5tjLCBUaOG7pyDEkOG7qWMsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1570863360281!5m2!1svi!2s"frameborder="0" style="border:0;" allowfullscreen></iframe></div>
        </section>
        <!-- Contact section end -->
    
    <!-- Related product section -->
    <section class="related-product-section">
            <div class="container">
                <div class="section-title text-uppercase">
                    <h2>Continue Shopping</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="tag-new">New</div>
                                <img src="./img/product/2.jpg" alt="">
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="./img/product/5.jpg" alt="">
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="./img/product/9.jpg" alt="">
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
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="./img/product/1.jpg" alt="">
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
                </div>
            </div>
        </section>
        <!-- Related product section end -->
    @endsection