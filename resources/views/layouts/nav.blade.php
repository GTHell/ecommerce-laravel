<!-- Header Icon -->
<div class="header-icons">
    <a href="{{ Auth::check() ? "/dashboard" : "/login" }}" class="header-wrapicon1 dis-block m-l-30">
        <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
    </a>

    <span class="linedivide1"></span>

    <shopping-cart></shopping-cart>

</div>
</div>

{{--<!-- top noti -->--}}
{{--<div class="flex-c-m size22 bg0 s-text21 pos-relative">--}}
{{--20% off everything!--}}
{{--<a href="product.html" class="s-text22 hov6 p-l-5">--}}
{{--Shop Now--}}
{{--</a>--}}

{{--<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">--}}
{{--<i class="fas fa-remove fs-13" aria-hidden="true"></i>--}}
{{--</button>--}}
{{--</div>--}}

<!-- Header -->
<header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-26">
        <div class="topbar2">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fas fa-facebook"></a>
                <a href="#" class="topbar-social-item fas fa-instagram"></a>
                <a href="#" class="topbar-social-item fas fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fas fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fas fa-youtube-play"></a>
            </div>

            <!-- Logo2 -->
            <a href="index.html" class="logo2">
                <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <div class="topbar-child2">
                @auth
                    <a href="#"><span class="topbar-email">
                                {{ Auth()->user()->email }}
                            </span></a>
            @endauth

            {{--<div class="topbar-language rs1-select2">--}}
            {{--<select class="selection-1" name="time">--}}
            {{--<option>USD</option>--}}
            {{--<option>EUR</option>--}}
            {{--</select>--}}
            {{--</div>--}}

            <!--  -->
                <a href="{{ Auth::check() ? "/dashboard" : "/login" }}" class="header-wrapicon1 dis-block m-l-30">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>

                <shopping-cart></shopping-cart>

            </div>
        </div>

        <div class="wrap_header">

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <!-- Dropdown -->
                        {{--<li>--}}
                        {{--<a href="index.html">Home</a>--}}
                        {{--<ul class="sub_menu">--}}
                        {{--<li><a href="index.html">Homepage V1</a></li>--}}
                        {{--<li><a href="home-02.html">Homepage V2</a></li>--}}
                        {{--<li><a href="home-03.html">Homepage V3</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        <li class="sale-noti">
                            <a href="{{ route('index') }}">Shop</a>
                        </li>

                        <li>
                            <a href="product.html">Shop</a>
                        </li>

                        <li>
                            <a href="{{ route('carts') }}">Cart</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="{{ Auth::check() ? "/dashboard" : "/login" }}" class="header-wrapicon1">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <shopping-cart></shopping-cart>

            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fas fa-facebook"></a>
                        <a href="#" class="topbar-social-item fas fa-instagram"></a>
                        <a href="#" class="topbar-social-item fas fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fas fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fas fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage V1</a></li>
                        <li><a href="home-02.html">Homepage V2</a></li>
                        <li><a href="home-03.html">Homepage V3</a></li>
                    </ul>
                    <i class="arrow-main-menu fas fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.html">Shop</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.html">Sale</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="cart.html">Features</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="blog.html">Blog</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="about.html">About</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
