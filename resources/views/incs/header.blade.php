  <!-- start preloader -->
  <div class="preloader">
    <div class="middle">
       <img src="images/favicon.png" alt="" srcset="">
    </div>
</div>
<!-- end preloader -->

<!-- Start header -->
<header id="header" class="header-style-three">
    <div class="topbar">
        <div class="upper-topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-9">
                        <div class="contact-info">
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Gwarimpa, Abuja-FCT</li>
                                <li><i class="fa fa-mobile"></i> +2349028820064</li>
                                <li><i class="fa fa-envelope-o"></i> support@zearealcarefoundation.com</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col col-sm-3">
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end upper-topbar -->

         <!-- end lower-topbar -->

    </div>  <!-- end top-bar -->

    <nav class="navigation navbar navbar-default" id="main-navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <button class="close-navbar"><i class="fa fa-close"></i></button>
                <ul class="nav navbar-nav">
<li class="{{request()->is('')?'current':''}}">
    <a href="/" >Home</a>
</li>
<li class="{{request()->is('about')?'current':''}}">
    <a href="/about" class="text-white">About</a>
</li>
                    {{-- <li class="">
                        <a href="/blog">Blog</a>

                    </li> --}}
                    {{-- <li class="">
                        <a href="/shop">Shop</a>

                    </li> --}}

                    <li class="{{request()->is('projects')?'current':''}}">

                        <a href="/projects">Projects</a>

                    </li>
                    <li class="{{request()->is('program-area')?'current':''}}">

                        <a href="/program-area">Program Area</a>

                    </li>
                    <li class="{{request()->is('contact')?'current':''}}">

                        <a href="/contact">Contact</a></li>
                </ul>
            </div><!-- end of nav-collapse -->

            <div style="display: none" class="navbar-right social-links-mini-cart ">
                <ul class="mini-cart-wrapper">
                    <li>
                        <a href="#" class="mini-cart-btn">
                            <i class="fi flaticon-bag-1"></i>
                            <span class="item-count">21</span>
                        </a>
                        <ul class="mini-cart">
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/shop/thumb/img-1.jpg" alt="">
                                </div>
                                <div class="product-details">
                                    <h6>Name of the product</h6>
                                    <p>$255.5</p>
                                    <a href="#"><i class="fi flaticon-garbage"></i></a>
                                </div>
                            </li>
                            <li class="item">
                                <div class="product-img">
                                    <img src="images/shop/thumb/img-2.jpg" alt="">
                                </div>
                                <div class="product-details">
                                    <h6>Name of the product</h6>
                                    <p>$155.5</p>
                                    <a href="#"><i class="fi flaticon-garbage"></i></a>
                                </div>
                            </li>
                            <li class="minicart-price-total">
                                <div class="price-total">
                                    <span class="label-price-total">Subtotal</span>
                                    <div class="price-total-w">
                                        <span>255.5</span>
                                    </div>
                                </div>

                                <div class="checkout-btn">
                                    <a class="btn theme-btn">Proceed to checkout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul> <!-- end mini-cart -->
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<!-- end of header -->
