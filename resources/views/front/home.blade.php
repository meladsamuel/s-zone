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
                                            src="{{ asset('/9000.jpg') }}"
                                            alt="" title="#htmlcaption_43"/>
                                    </a>
                                    <a href="#">
                                        <img
                                            src="{{ asset('/7.jpg') }}"
                                            alt="" title="#htmlcaption_57"/>
                                    </a>
                                    <a href="#">
                                        <img
                                            src="{{ asset('/szone.jpeg') }}"
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
                <div class="row">
                    <div
                        class="col-xl-9 col-lg-9 col-md-9 col-xs-12 col-md-12 col-lg-12">
                        <div class="clearfix">
                            <h2 class="title_block">
                                Product
                            </h2>
                            <div id="product-list">
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="item text-center col-4 col-sm-6 col-xs-12">
                                            <div class="product-miniature js-product-miniature item-one first_item"
                                                 data-id-product="{{$product->id}}" data-id-product-attribute="40"
                                                 itemscope
                                                 itemtype="https://schema.org/Product">
                                                <div class="thumbnail-container">
                                                    <a class="thumbnail product-thumbnail two-image">
                                                        <img
                                                            class="img-fluid image-cover"
                                                            src="{{$product->img}}"
                                                            alt="{{$product->name}}"
                                                            data-full-size-image-url=""
                                                            width="600"
                                                            height="600"
                                                        >
                                                        <img
                                                            class="img-fluid image-secondary"
                                                            src="{{$product->img}}"
                                                            alt="{{$product->name}}"
                                                            data-full-size-image-url=""
                                                            width="600"
                                                            height="600"
                                                        >
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <div class="product-groups">

                                                        <div class="category-title">
                                                            <a href="#">{{$product->name}}</a>
                                                        </div>

                                                        <div class="product-title" itemprop="name">
                                                            <a href="">{{$product->name}}</a>
                                                        </div>

                                                        <div class="product-group-price">
                                                            <div class="product-price-and-shipping">
                                                                <span itemprop="price" class="price">{{$product->price}} EGP</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-buttons d-flex justify-content-center"
                                                         itemprop="offers" itemscope
                                                         itemtype="https://schema.org/Offer">
                                                        <form data-product-id="{{$product->id}}"
                                                              data-product-price="{{$product->price}}"
                                                              data-product-name="{{$product->name}}"
                                                              data-product-img="{{$product->img}}"
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

    <div class="container">
        <center><h1>our pranches</h1></center>
        <div id="map" style="height:500px">

        </div>
    </div>
    <br><br>
@endsection
@section('script')
    <script>
        let products = document.getElementById('product-list');
        let productSubtotal = document.getElementById('product-subtotal');
        let productTotal = document.getElementById('product-total');
        let shoppingCartCount = document.querySelector('.cart-products-count');
        let shoppingCartContent = document.getElementById("shopping-cart-content")
        products.addEventListener("submit", async function (event) {
            event.preventDefault();
            let isNew = true;
            const product = event.target.dataset;
            const count = +shoppingCartCount.innerText + 1;
            const currentSubtotal = +productSubtotal.dataset.productSubtotal + Number(product.productPrice);
            productSubtotal.dataset.productSubtotal = currentSubtotal.toString();
            productSubtotal.innerText = `( ${currentSubtotal}EGP )`
            productTotal.innerText = `( ${currentSubtotal}EGP )`
            $(".cart-products-count").text(count.toString());
            // shoppingCartCount.innerText = count.toString();

            const productsList = `<li data-product-id=${product.productId}>
            <div class="media">
               <img class="d-flex product-image"
                    src="${product.productImg}"
                    alt="${product.productName}">
               <div class="media-body">
                    <div class="product-name">${product.productName}</div>
                    <div class="group-price">
                        <span class="product-price">${product.productPrice}EGP</span>
                        <span class="quantity" data-product-quantity="1">x1</span>
                    </div>
                    <a class="remove-from-cart" rel="nofollow" data-product-id="${product.productId}"
                       href="javascript: void(0)"
                       data-link-action="remove-from-cart" title="remove from cart">
                        <i class="fa fa-trash-o" data-product-id="${product.productId}" aria-hidden="true"></i>
                    </a>
                </div>
            <div> </li>`;
            for (const item of shoppingCartContent.children) {
                if (item.dataset.productId === product.productId) {
                    const duplicatedProduct = item.querySelector('.quantity');
                    duplicatedProduct.dataset.productQuantity = +duplicatedProduct.dataset.productQuantity + 1;
                    duplicatedProduct.innerText = `x${duplicatedProduct.dataset.productQuantity}`;
                    isNew = false;
                }
            }
            if (isNew) {
                shoppingCartContent.innerHTML += productsList;
            }


            $.ajax({
                type: "POST",
                url: '/add-to-cart',
                data: {product: event.target.dataset, _token: '{{csrf_token()}}'},
                success: function (data) {
                    console.log(data);
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
            $('.remove-from-cart').on('click', function (e) {
                e.preventDefault();
                console.log(e.target);
                document.querySelector(`li[data-product-id="${e.target.dataset.productId}"]`).remove();

                $.ajax({
                    type: "DELETE",
                    url: `/shopping-cart/products/${e.target.dataset.productId}`,
                    data: {product: event.target.dataset, _token: '{{csrf_token()}}'},
                    success: function (data) {
                        console.log(data);
                        productSubtotal.innerText = `( ${data.price}EGP )`;
                        productSubtotal.dataset.productSubtotal = data.price.toString();
                        productTotal.innerText = `( ${data.price}EGP )`;
                        productTotal.dataset.productSubtotal = data.price.toString();
                        shoppingCartCount.innerText = data.count.toString();

                    },
                    error: function (data, textStatus, errorThrown) {
                        console.log(data);

                    },
                });
            });
        })
        $('.remove-from-cart').on('click', function (e) {
            e.preventDefault();
            console.log(e.target);
            document.querySelector(`li[data-product-id="${e.target.dataset.productId}"]`).remove();

            $.ajax({
                type: "DELETE",
                url: `/shopping-cart/products/${e.target.dataset.productId}`,
                data: {product: event.target.dataset, _token: '{{csrf_token()}}'},
                success: function (data) {
                    console.log(data);
                    productSubtotal.innerText = `( ${data.price}EGP )`;
                    productSubtotal.dataset.productSubtotal = data.price.toString();
                    productTotal.innerText = `( ${data.price}EGP )`;
                    productTotal.dataset.productSubtotal = data.price.toString();
                    shoppingCartCount.innerText = data.count.toString();

                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        });


    </script>

    <script type="text/javascript" src="https://atfawry.fawrystaging.com/atfawry/plugin/assets/payments/js/fawrypay-payments.js"></script>
    <script>

        $("#checkout-btn").on('click', function (event) {
            event.target.disabled;
            $.ajax({
                type: 'POST',
                url: "/orders",
                data: {product: event.target.dataset, _token: '{{csrf_token()}}'},
                success: function (data) {
                    console.log(data);
                    if (!data.status) {
                        window.location.replace('/login');
                    }
                    // const configuration = {
                    //     locale: "en",  //default en
                    //     mode: DISPLAY_MODE.SEPARATED,  //required, allowed values [POPUP, INSIDE_PAGE, SIDE_PAGE]
                    // };
                    // FawryPay.checkout(data.charge, configuration);
                    window.location.replace('/scan?merchantRefNumber='+data.charge.merchantRefNum);

                }
            });
        });


    </script>


    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG-EYwZNQE8p_eUx7yey-JRLhIg-VXWDY&callback=initMap">
    </script>

    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru

            var myLatLng = new google.maps.LatLng(30, 31);
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: myLatLng,
            });

            function createMarker(latlng) {
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: {
                        url: "/kk.png", // url
                        scaledSize: new google.maps.Size(40, 40), // scaled size
                        origin: new google.maps.Point(0, 0), // origin
                        anchor: new google.maps.Point(0, 0) // anchor
                    },
                    title: "szone  machine"
                });
            }

            $.ajax({
                type: "GET",
                url: '/machines',
                data: {_token: "{{csrf_token()}}"},
                success: function (data) {
                    data.forEach(machine => createMarker({lat: +machine.latitude, lng: +machine.longitude}))
                }
            });
        }


    </script>
@endsection
