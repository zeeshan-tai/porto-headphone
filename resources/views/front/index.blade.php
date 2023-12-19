@extends('front.layout.master')
@section('main-content')

<main class="main">
    <section class="section-1 pt-0">
        <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover">
            @foreach ($banners as $banner)
            <div class="home-banner bg-img banner-left" >
                <img src="{{asset('uploads/').'/'.$banner->image}}" alt="banner" width="400" height="400" />
                <div class="container position-relative">
                    <div class="banner-layer banner-layer-middle">
                        <h2 class="m-b-1 appear-animate banner-title" data-animation-duration="1200" data-animation-delay="800" data-animation-name="fadeIn">{{ $banner->title }}</h2>
                        <h3 class="text-uppercase rotated-upto-text mb-0 position-relative appear-animate" data-animation-delay="800" data-animation-duration="1200" data-animation-name="blurIn">
                            <small>Up to</small>{{ $banner->title }}</h3>

                        <hr class="divider-short-thick appear-animate" data-animation-duration="1200" data-animation-delay="800" data-animation-name="fadeIn">

                        <h5 class="text-uppercase d-inline-block ls-n-20 pr-1 pt-2 appear-animate" data-animation-delay="1600" data-animation-duration="1200" data-animation-name="fadeIn">Starting at
                            <span>$
                                <strong>1</strong>99</span>
                        </h5>
                        <a href="{{ route('front.shop') }}" class="btn btn-dark btn-xl btn-icon-right appear-animate" role="button" data-animation-delay="2200" data-animation-duration="1200" data-animation-name="fadeIn">Shop Now
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                    <!-- End .div-content -->
                </div>
                <!-- End .container -->
            </div>
            @endforeach
            <!-- End .div-1 -->

            {{-- <div class="home-banner bg-img" style="background-image: url(assets/images/demoes/demo17/slider/slide-2.jpg); background-color: #c0bec1;">
                <div class="container position-relative">
                    <div class="banner-layer banner-layer-middle">
                        <h2 class="m-b-1 appear-animate banner-title" data-animation-duration="1200" data-animation-delay="800" data-animation-name="fadeIn">Deals are Here!</h2>
                        <h3 class="text-uppercase rotated-upto-text mb-0 position-relative appear-animate" data-animation-duration="1200" data-animation-delay="800" data-animation-name="blurIn">
                            <small>Up to</small>50% Off</h3>

                        <hr class="divider-short-thick appear-animate" data-animation-duration="1200" data-animation-delay="800" data-animation-name="fadeIn">

                        <h5 class="text-uppercase d-inline-block mb-0 ls-n-20 pr-1 pt-2 appear-animate" data-animation-duration="1200" data-animation-delay="800" data-animation-name="fadeIn">Starting at
                            <span>$
                                <strong>1</strong>99</span>
                        </h5>
                        <a href="{{ route('front.shop') }}" class="btn btn-dark btn-xl btn-icon-right appear-animate" role="button" data-animation-delay="2200" data-animation-duration="1200" data-animation-name="fadeIn">Shop Now
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
                    <!-- End .div-content -->
                </div>
                <!-- End .container -->
            </div> --}}
            <!-- End .div-1 -->
        </div>

        <!-- End .home-slider -->
    </section>
    <!-- End .section-1 -->

    {{-- shock shock ki bt hai --}}

    <section class="section-2 product-collection container">

        <div class="row m-0">
            @foreach ($products as $product)
            <div class="col-md-4 col-6 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="{{ route('front.singleproduct', $product->slug) }}">
                            <img src="{{asset('uploads/').'/'.$product->thumbnail}}" alt="product" width="400" height="400" />
                        </a>

                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart product-type-simple" data-toggle="modal" data-target="#addCartModal">
                                <i class="icon-shopping-cart"></i>
                            </button>
                        </div>

                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View
                        </a>
                    </figure>

                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="{{ route('front.shop') }}" class="product-category">FACE</a>,
                                <a href="{{ route('front.shop') }}" class="product-category">LIPS</a>
                            </div>

                            <a href="#" class="btn-icon-wish">
                                <i class="icon-heart"></i>
                            </a>
                        </div>

                        <div class="ratings-container">
                        <h3 class="product-title"> <a href="{{ route('front.singleproduct', $product->slug) }}">{{ $product->title }}</a> </h3>

                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->

                        <div class="price-box">
                            <span class="product-price">{{ $product->price }}</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <!-- End .product-default -->
            </div>
            @endforeach
        </div>

    </section>
    <!-- End .section-2 -->

    <section class="section-3 category-banner-section container appear-animate">
        <div class="owl-carousel owl-theme" data-owl-options="{
                'items': 3,
                'margin': 20,
                'dots': false,
                'loop': false,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '580': {
                        'items': 2
                    },
                    '1200': {
                        'items': 3
                    }
                }
            }">
            <div class="cat-banner bg-dark appear-animate" data-animation-name="fadeInRightShorter">
                <figure>
                    <img src="assets/images/demoes/demo17/brands/brand-1.png" alt="brand" width="140" height="60" class="w-auto">
                </figure>

                <div class="cat-content d-inline-block position-relative">
                    <h3 class="text-uppercase rotated-upto-text mb-0">
                        <small class="m-0">Up to</small>50% Off</h3>

                    <hr class="divider-short-thick">

                    <h5 class="text-uppercase d-inline-block mb-0 ls-n-20 pr-1 pt-2">Starting at
                        <span>$
                            <strong>3</strong>99</span>
                    </h5>
                    <a href="{{ route('front.shop') }}" class="btn btn-xl btn-icon-right" role="button">Shop Now
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <!-- End .cat-content -->
            </div>
            <!-- End .cat-banner -->

            <div class="cat-banner bg-dark appear-animate" data-animation-name="fadeInRightShorter">
                <figure>
                    <img src="assets/images/demoes/demo17/brands/brand-2.png" alt="brand" width="140" height="60" class="w-auto">
                </figure>

                <div class="cat-content d-inline-block position-relative">
                    <h3 class="text-uppercase rotated-upto-text mb-0">
                        <small>Up to</small>60% Off</h3>

                    <hr class="divider-short-thick">

                    <h5 class="text-uppercase d-inline-block mb-0 ls-n-20 pr-1 pt-2">Starting at
                        <span>$
                            <strong>4</strong>99</span>
                    </h5>
                    <a href="{{ route('front.shop') }}" class="btn text-dark btn-xl btn-icon-right" role="button">Shop
                        Now
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <!-- End .cat-content -->
            </div>
            <!-- End .cat-banner -->

            <div class="cat-banner bg-dark appear-animate" data-animation-name="fadeInRightShorter">
                <figure>
                    <img src="assets/images/demoes/demo17/brands/brand-3.png" alt="brand" width="140" height="60" class="w-auto">
                </figure>

                <div class="cat-content d-inline-block position-relative">
                    <h3 class="text-uppercase rotated-upto-text mb-0">
                        <small>Up to</small>70% Off</h3>

                    <hr class="divider-short-thick">

                    <h5 class="text-uppercase d-inline-block mb-0 ls-n-20 pr-1 pt-2">Starting at
                        <span>$
                            <strong>5</strong>99</span>
                    </h5>
                    <a href="{{ route('front.shop') }}" class="btn text-dark btn-xl btn-icon-right" role="button">Shop
                        Now
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
                <!-- End .cat-content -->
            </div>
            <!-- End .cat-banner -->
        </div>
        <!-- category-banner-section -->

        <div class="newsletter-section appear-animate bg-dark mt-4 mb-4">
            <div class="d-flex flex-wrap align-items-center align-items-lg-start">
                <div class="col-md-6 d-block d-sm-flex text-center text-sm-left news-info justify-content-center justify-content-md-start align-items-start align-items-md-center">
                    <i class="far fa-envelope text-white"></i>

                    <div class="newsletter-content">
                        <h3 class="ls-n-10 mb-0 text-white">Get Special Offers and Savings</h3>
                        <p class="font-weight-normal">Get all the latest information on Events, Sales and Offers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget-newsletter px-3">
                    <form action="#" class="d-flex justify-content-center mb-0 ml-auto mr-auto mb-1 mb-md-0">
                        <input type="email" class="form-control mb-0 border-0" placeholder="Email Your E-mail Address..." required />
                        <button class="btn text-dark ls-n-25">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End .newsletter-section -->
    </section>
    <!-- End .section-3 -->

    <section class="section-4 product-collection-two">
        <div class="container">
            <div class="row m-0 bg-white">
                @foreach ($products as $product)
                <div class="col-lg-3 col-sm-4 col-6 appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="400">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{ route('front.singleproduct', $product->slug) }}">
                                <img src="{{asset('uploads/').'/'.$product->thumbnail}}" alt="product" width="400" height="400" />
                            </a>

                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart product-type-simple" data-toggle="modal" data-target="#addCartModal">
                                    <i class="icon-shopping-cart"></i>
                                </button>
                            </div>

                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>

                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="{{ route('front.shop') }}" class="product-category">BRUSHES</a>,
                                    <a href="{{ route('front.shop') }}" class="product-category">TOOLS</a>
                                </div>
                                <a href="#" class="btn-icon-wish">
                                    <i class="icon-heart"></i>
                                </a>
                            </div>

                            <h3 class="product-title"> <a href="{{ route('front.singleproduct', $product->slug) }}">{{ $product->title }}</a> </h3>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width: 0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                            <!-- End .product-container -->

                            <div class="price-box">
                                <span class="product-price">{{ $product->price }}</span>
                            </div>
                            <!-- End .price-box -->
                        </div>
                        <!-- End .product-details -->
                    </div>
                    <!-- End .product-default -->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End .section-4 -->

    <section class="section-5 category-section container appear-animate" data-animation-duration="1200">
        <h2 class="section-title text-center">Shop By Category</h2>

        <div class="border-container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-4 col-6">
                    <a class="btn btn-dark text-white btn-cat" role="button" href="{{ route('front.shop') }}">{{ $category->title }}</a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="brand-section pt-5">
            <h2 class="section-title text-center">Shop By Brand</h2>


            <div class="brand-slider owl-carousel owl-theme nav-outer" data-owl-options="{
                    'items': 2,
                    'nav': true,
                    'dots': false,
                    'margin': 20,
                    'responsive': {
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 4
                        }
                    }
                }">
{{-- {{ dd($brands) }} --}}
                @foreach ($brands as $brand)
                <div class="brands">
                    <img src="{{asset('uploads/').'/'.$brand->image}}" alt="brand">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End .category-section -->

    <section class="section-6 blog-section bg-gray  appear-animate">
        <div class="container">

            <div class="row">
                <div class="col-md-7 col-lg-6 mb-2 mb-sm-0 media-with-zoom">
                    <h2 class="section-title">Latest News</h2>

                    <div class="owl-carousel owl-theme" data-owl-options="{
                            'autoplay': false,
                            'loop': false,
                            'autoHeight': true
                        }">
                        @foreach ($news as $news)
                        <article class="post d-sm-flex d-block align-items-center media-with-zoom mb-0">
                            <div class="post-media position-relative ml-auto mr-auto mb-sm-0">
                                <a href="single.html">
                                    <img src="{{asset('uploads/').'/'.$news->image}}" alt="Post" width="265" height="220" data-zoom-image="{{asset('uploads/').'/'.$news->image}}" alt="Post" width="200" height="200">
                                </a>
                                <div class="post-date">
                                    <span class="day">13</span>
                                    <span class="month">JAN</span>
                                </div>
                                <span class="prod-full-screen">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <!-- End .post-media -->

                            <div class="post-body border-0 text-center text-sm-left">
                                <h2 class="post-title">
                                    <a href="single.html">{{ $news->title }}</a>
                                </h2>
                                <div class="post-content">
                                    <p>{{ $news->description }}</p>
                                </div>
                                <!-- End .post-content -->
                                <a href="single.html" class="post-comment">
                                    <i class="far fa-comments m-r-1"></i>0 COMMENTS</a>
                            </div>
                            <!-- End .post-body -->
                        </article>
                        @endforeach
                        <!-- End .post -->
                    </div>
                </div>

                <div class="col-md-5 col-lg-6">
                    <h2 class="section-title">Latest Product Reviews</h2>

                    <div class="owl-carousel owl-theme" data-owl-options="{
                            'autoplay': false,
                            'autoHeight': true
                        }">
                        @foreach ($reviews as $review)

                        <div class="testimonial bg-white">
                            <div class="testimonial-owner">

                                <div class="testi-content">
                                    <div class="ratings-container mb-1">
                                        {{-- <div class="product-ratings">
                                            <div class="ratings" style="width: 80%"></div>
                                        </div> --}}
                                        {{-- <div class="product-ratings">
                                            @php
                                                $ratingPercentage = 100; // Replace with your actual rating percentage
                                                $maxStars = $review->rating_number;
                                                $filledStars = round($ratingPercentage / 20);
                                                $emptyStars = $maxStars - $filledStars;
                                            @endphp

                                            @for ($i = 0; $i < $filledStars; $i++)
                                                <i class="fas fa-star" style="color: #f1c40f;"></i>
                                            @endfor

                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <i class="far fa-star" style="color: #f1c40f;"></i>
                                            @endfor
                                        </div> --}}
                                        {{-- <div class="product-ratings"> --}}
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $review->rating_number)
                                                <i class="fas fa-star" style="color: #f1c40f;"></i>
                                                    {{-- <span class="fa fa-star checked"></span> --}}
                                                @else
                                                <i class="far fa-star" style="color: #f1c40f;"></i>
                                                    {{-- <span class="fa fa-?star"></span> --}}
                                                @endif
                                            @endfor
                                        {{-- </div> --}}


                                    </div>

                                    <h4 class="testimonial-title p-0">{{ $review->product != '' ? $review->product->title : ''}}</h4>

                                    <blockquote class="ml-3 pr-0">
                                        <p>{{ $review->description }}</p>
                                    </blockquote>

                                    <h5 class="testi-author">by Joe Doe</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- End .testimonial -->

                        <!-- End .testimonial -->
                    </div>
                    <!-- End .testimonial-slider -->
                </div>
            </div>

        </div>
    </section>
    <!-- End .blog-section -->
</main>
@endsection
