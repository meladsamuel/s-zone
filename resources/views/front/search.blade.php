@extends('layouts.site')

@section('content')
    <div id="main">
        <div id="displayTop" class="displaytopthree">
            <div class="container">
                <div class="row">
                    <div class="nov-row  col-lg-12 col-xs-12">
                        <div class="nov-row-wrap row">
                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->
                            <div class="nov-html col-xl-3 col-lg-3 col-md-3">
                                <div class="block">
                                    <div class="block_content">

                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/html.tpl -->

                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                            <div id="nov-slider"
                                 class="slider-wrapper theme-default col-xl-9 col-lg-9 col-md-9 col-md-12"
                                 data-effect="random"
                                 data-slices="15"
                                 data-animSpeed="500"
                                 data-pauseTime="10000"
                                 data-startSlide="0"
                                 data-directionnav="false"
                                 data-controlNav="true"
                                 data-controlNavThumbs="false"
                                 data-pauseOnHover="true"
                                 data-manualAdvance="false"
                                 data-randomStart="false">
                                <div class="nov_preload">
                                    <div class="process-loading active">
                                        <div class="loader">
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nivoSlider">
                                    <a href="#">
                                        <img
                                            src="http://demo.bestprestashoptheme.com/savemart/modules/novnivoslider/images/266cf50ba4d1d91fa5f5ded20bb66ea38de3b350_1.jpg"
                                            alt="" title="#htmlcaption_42"/>
                                    </a>
                                    <a href="#">
                                        <img
                                            src="http://demo.bestprestashoptheme.com/savemart/modules/novnivoslider/images/62896aebffd6fdce749d957fc76bd83d734fa338_2.jpg"
                                            alt="" title="#htmlcaption_43"/>
                                    </a>
                                    <a href="#">
                                        <img
                                            src="http://demo.bestprestashoptheme.com/savemart/modules/novnivoslider/images/195d62088850e3489886855b4239edcc4fb1868f_3.jpg"
                                            alt="" title="#htmlcaption_57"/>
                                    </a>
                                </div>
                                <div id="htmlcaption_42" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slide Home 3 01
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slide Home 3 01</p>
                                            </div>
                                            <div class="nov-html effect-0">
                                                <p>Slide Home 3 01</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption_43" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slide Home 3 02
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slide Home 3 02</p>
                                            </div>
                                            <div class="nov-html effect-0">
                                                <p>Slide Home 3 02</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="htmlcaption_57" class="nivo-html-caption">
                                    <div class="nov-slider-ct">
                                        <div class="nov-center slider-none">
                                            <div class="nov-title effect-0">
                                                Slider Home 3 03
                                            </div>
                                            <div class="nov-description effect-0">
                                                <p>Slider Home 3 03</p>
                                            </div>
                                            <div class="nov-html effect-0">
                                                <p>Slider Home 3 03</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novpagemanage/views/source/slider.tpl -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="content" class="page-home pagehome-three">
            <div class="nov-row  col-lg-12 col-xs-12">
                <div class="nov-row-wrap row">
                    <div
                        class="nov-productlist productlist-slider col-xl-9 col-lg-9 col-md-9 col-xs-12 col-md-12 col-lg-12">
                        <div class="block block-product clearfix">
                            <h2 class="title_block">
                                Product
                            </h2>
                            <div id="product-list" class="block_content">
                                <div
                                    class="product_list grid owl-carousel owl-theme multi-row"
                                    data-autoplay="false" data-autoplayTimeout="6000" data-loop="false"
                                    data-margin="0" data-dots="false" data-nav="true" data-items="3"
                                    data-items_large="3" data-items_tablet="3" data-items_mobile="2">
                                    @foreach($product as $products)
                                        <div class="item text-center">
                                            <div class="product-miniature js-product-miniature item-one first_item"
                                                 data-id-product="1" data-id-product-attribute="40" itemscope
                                                 itemtype="https://schema.org/Product">
                                                <div class="thumbnail-container">
                                                    <a href="productdetails/{{$products->id}}" class="thumbnail product-thumbnail two-image">
                                                        <img
                                                            class="img-fluid image-cover"
                                                            src="{{$products->img}}"
                                                            alt="{{$products->name}}"
                                                            data-full-size-image-url=""
                                                            width="600"
                                                            height="600"
                                                        >
                                                        <img
                                                            class="img-fluid image-secondary"
                                                            src="{{$products->img}}"
                                                            alt="{{$products->name}}"
                                                            data-full-size-image-url=""
                                                            width="600"
                                                            height="600"
                                                        >
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">

                                                        <div class="category-title">
                                                            <a href="#">{{$products->name}}</a>
                                                        </div>

                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                                <div class="star star_on"></div>
                                                            </div>
                                                            <span>5 review</span>
                                                        </div>

                                                        <div class="product-title" itemprop="name">
                                                            <a href="">{{$products->name}}</a>
                                                        </div>

                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">{{$products->price}} EGP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-center"
                                                         itemprop="offers" itemscope
                                                         itemtype="https://schema.org/Offer">
                                                        <form data-product-id="{{$products->id}}"
                                                              data-product-price="{{$products->price}}"
                                                              data-product-name="{{$products->name}}"
                                                              data-product-img="{{$products->img}}"
                                                              class="formAddToCart">
                                                            <button style="border: none" class="add-to-cart"
                                                                    type="submit">
                                                                <i class="novicon-cart"></i><span>أضف للسلة</span>
                                                            </button>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

