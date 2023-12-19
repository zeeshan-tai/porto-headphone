<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns">
                <div class="header-dropdown">
                    <a href="#">
                        <i class="flag-us flag"></i>Eng</a>
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flag-fr flag mr-2"></i>FRA</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <!-- End .header-dropdown -->

                <div class="header-dropdown ml-4">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="#">EUR</a>
                            </li>
                            <li>
                                <a href="#">USD</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End .header-menu -->

                <span class="separator"></span>

                <div class="header-menu">
                    <ul class="mb-0 d-none d-lg-flex">
                        <li>
                            <a href="{{ route('front.checkout') }}">Checkout</a>
                        </li>
                        <li>
                            <a href="{{ route('front.cart') }}">Cart</a>
                        </li>
                        <li>
                            <a href="{{ route('front.contact') }}">Contact Us</a>
                        </li>
                        <li>
                            {{-- <a href="{{ route('front.testimonial') }}">Testimonial</a> --}}
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End .header-dropdown -->

            <div class="header-right w-lg-max ml-0 ml-lg-auto">
                <div class="header-contact d-none d-sm-flex align-items-center ml-auto">
                    <i class="icon-phone-2"></i>
                    <h6>
                        <a href="tel:#" class="d-block">+123 5678 890</a>
                    </h6>
                </div>
                <!-- End .header-contact -->

                <span class="separator d-sm-block d-none"></span>

                <div class="header-search header-search-popup header-search-category header-icon text-dark">
                    <a href="#" class="search-toggle btn p-0 icon-magnifier" role="button">
                    </a>

                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control bg-white" name="q" id="q" placeholder="Search..." required="">
                            <button class="btn fas fa-search bg-transparent p-0 border-0" type="submit"></button>
                        </div>
                        <!-- End .header-search-wrapper -->
                    </form>
                </div>

                <a href="{{ route('front.dashboard') }}" class="header-icon  text-dark">
                    <i class="icon-user-2"></i>
                </a>

                <a href="{{ route('front.wishlist') }}" class="header-icon position-relative">
                    <i class="icon-wishlist-2 text-dark"></i>
                    <span class="badge-circle">0</span>
                </a>

                <div class="dropdown cart-dropdown">
                    <a href="{{ route('front.cart') }}" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle d-flex align-items-center" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="minicart-icon"></i>
                        <span class="cart-count badge-circle">3</span>
                    </a>

                    <div class="cart-overlay"></div>

                    <div class="dropdown-menu mobile-cart">
                        <a href="#" title="Close (Esc)" class="btn-close">×</a>

                        <div class="dropdownmenu-wrapper custom-scrollbar">
                            <div class="dropdown-cart-header">Shopping Cart</div>
                            <!-- End .dropdown-cart-header -->

                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="demo17-product.html">Ultimate 3D Bluetooth Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $99.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="demo17-product.html" class="product-image">
                                            <img src="assets/images/demoes/demo17/products/product-1.jpg" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product">
                                            <span>×</span>
                                        </a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="demo17-product.html">Brown Women Casual HandBag</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="demo17-product.html" class="product-image">
                                            <img src="assets/images/demoes/demo17/products/product-2.jpg" alt="product" width="80" height="80">
                                        </a>

                                        <a href="#" class="btn-remove" title="Remove Product">
                                            <span>×</span>
                                        </a>
                                    </figure>
                                </div>
                                <!-- End .product -->

                                <div class="product">
                                    <div class="product-details">
                                        <h4 class="product-title">
                                            <a href="demo17-product.html">Circled Ultimate 3D Speaker</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span> × $35.00
                                        </span>
                                    </div>
                                    <!-- End .product-details -->

                                    <figure class="product-image-container">
                                        <a href="demo17-product.html" class="product-image">
                                            <img src="assets/images/demoes/demo17/products/product-3.jpg" alt="product" width="80" height="80">
                                        </a>
                                        <a href="#" class="btn-remove" title="Remove Product">
                                            <span>×</span>
                                        </a>
                                    </figure>
                                </div>
                                <!-- End .product -->
                            </div>
                            <!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>SUBTOTAL:</span>

                                <span class="cart-total-price float-right">$134.00</span>
                            </div>
                            <!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.html" class="btn btn-gray btn-block view-cart">View Cart
                                </a>
                                <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                            </div>
                            <!-- End .dropdown-cart-total -->
                        </div>
                        <!-- End .dropdownmenu-wrapper -->
                    </div>
                    <!-- End .dropdown-menu -->
                </div>
                <!-- End .dropdown -->
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left d-none d-lg-flex">
                <div class="main-nav d-flex w-lg-max">
                    <ul class="menu">
                        <li class="active">
                            <a href="{{ route('front.home') }}">Home</a>
                        </li>

                        <li>
                            <a href="{{ route('front.shop') }}">Shop</a>

                            <!-- End .megamenu -->
                        </li>

                        <li>
                            <a href="{{ route('front.category') }}">Categories</a>

                            <!-- End .megamenu -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End .header-left -->

            <div class="header-center justify-content-between">
                <a href="{{ route('front.home') }}" class="logo">
                    <img src="assets/images/logo-black.png" alt="Porto Logo" width="202" height="80">
                </a>

                <button class="mobile-menu-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- End .header-center -->

            <div class="header-right d-none d-lg-flex">
                <div class="main-nav d-flex w-lg-max justify-content-end">
                    <ul class="menu">
                        <li><a href="{{ route('front.blog') }}">Blog</a></li>
                        <li><a href="{{ route('front.about') }}">About Us</a></li>
                        <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-middle -->
</header>
