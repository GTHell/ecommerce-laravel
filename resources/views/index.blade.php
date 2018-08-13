@extends('layouts.index')
@section('content')

    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                @foreach($randProd2 as $key => $item)
                    <div class="item-slick1 item1-slick1" style="background-image: url(images/bg-img/blog{{$key+3}}.jpg);">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                            <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22"
                                data-appear="fadeInUp">
                                {{$item->name }}
                            </h2>

                            <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33"
                                  data-appear="fadeInDown">
							New Collection 2018
						</span>

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                                <!-- Button -->
                                <a href="{{ route('product.show', $item->id) }}"
                                   class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- Banner -->
    <div class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                @foreach($randProd as $product)
                    <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                        <!-- block1 -->
                        <div class="block1 hov-img-zoom pos-relative m-b-30">
                            <img class="lazyload"
                                 src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                 data-src="{{ $product->images[0]->url }}" alt="IMG-BENNER">

                            <div class="block1-wrapbtn w-size2">
                                <!-- Button -->
                                <a href="{{ route('product.show', $product->id) }}"
                                   class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                    {{ $product->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Our product -->
    <section class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    Our Products
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#latest" role="tab">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <div class="row">
                            @foreach($topSellProduct as $product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img class="lazyload"
                                                 src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                 data-src="{{ $product->images()->first()->url }}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <a href="{{ route('product.show', $product->id) }}"
                                                       class="flex-c-m mb-1 size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        View
                                                    </a>

                                                    <add-cart pid="{{ $product->id }}">
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </add-cart>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('product.show', $product->id) }}"
                                               class="block2-name dis-block s-text3 p-b-5">
                                                {{ $product->name }}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
											${{ $product->unit_price/100 }}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="latest" role="tabpanel">
                        <div class="row">
                            @foreach($latestProduct as $product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <img class="lazyload"
                                                 src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                 data-src="{{ $product->images()->first()->url }}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <a href="{{ route('product.show', $product->id) }}"
                                                       class="flex-c-m mb-1 size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        View
                                                    </a>

                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('product.show', $product->id) }}"
                                               class="block2-name dis-block s-text3 p-b-5">
                                                {{ $product->name }}
                                            </a>

                                            {{--<span class="block2-oldprice m-text7 p-r-5">--}}
                                            {{--$29.50--}}
                                            {{--</span>--}}

                                            <span class="block2-newprice m-text8 p-r-5">
                                            ${{ $product->unit_price/100 }}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!--  -->
                    <div class="tab-pane fade" id="top-rate" role="tabpanel">
                        <div class="row">
                            @foreach($topReviewProduct as $p)
                                <?php $product = $p->product ?>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img class="lazyload"
                                                 src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="
                                                 data-src="{{ $product->images()->first()->url }}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <a href="{{ route('product.show', $product->id) }}"
                                                       class="flex-c-m mb-1 size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        View
                                                    </a>

                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{ route('product.show', $product->id) }}"
                                               class="block2-name dis-block s-text3 p-b-5">
                                                {{ $product->name }}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
											${{ $product->unit_price/100 }}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Free Delivery Worldwide
                </h4>

                <a href="#" class="s-text11 t-center">
                    Click here for more info
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 Days Return
                </h4>

                <span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Store Opening
                </h4>

                <span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
            </div>
        </div>
    </section>
@endsection