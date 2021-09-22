<div class="header-center hidden-sm-down">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div id="_desktop_logo"
                 class="contentsticky_logo d-flex align-items-center justify-content-start col-lg-3 col-md-3">
                <a href="http://demo.bestprestashoptheme.com/savemart/">
                    <img class="logo img-fluid" src="{{asset('/szone.jpeg')}}"
                         alt="S zone">
                </a>

            </div>
            <div class="col-lg-9 col-md-9 header-menu d-flex align-items-center justify-content-end">
                <div class="data-contact d-flex align-items-center">
                    <div class="title-icon">support<i class="icon-support icon-address"></i></div>
                    <div class="content-data-contact">
                        <div class="support">Call customer services :</div>
                        <div class="phone-support">
                            1234 567 899
                        </div>
                    </div>
                </div>
                <div class="contentsticky_group d-flex justify-content-end">
                    <div class="header_link_myaccount">
                        <a class="login" href="/home"
                           rel="nofollow" title="تسجيل الدخول إلى حسابك"><i class="header-icon-account"></i></a>
                    </div>
                    <div class="header_link_wishlist">

                    </div>

                    <div id="_desktop_cart">
                        <div class="blockcart cart-preview active">
                            <div class="header-cart">
                                <div class="cart-left">
                                    <div class="shopping-cart"><i
                                            class="zmdi zmdi-shopping-cart"></i></div>
                                    <div id="shopping-cart-count"
                                         class="cart-products-count">{{ App\Models\Cart::count() }}</div>
                                </div>
                                <div class="cart-right d-flex flex-column align-self-end ml-13">
                                    <span class="title-cart">سلة الشراء</span>
                                    <span class="cart-item"> items</span>
                                </div>
                            </div>
                            <div class="cart_block ">
                                <div class="cart-block-content">
                                    <ul id="shopping-cart-content">
                                        @foreach(App\Models\Cart::content() as $key => $product)
                                            <li data-product-id="{{$key}}">
                                                <div class="media">
                                                    <img class="d-flex product-image"
                                                         src="{{$product['img']}}"
                                                         alt="{{$product['name']}}">
                                                    <div class="media-body">
                                                        <div class="product-name">{{$product['name']}}</div>
                                                        <div class=" group-price">
                                                            <span
                                                                class="product-price">( {{$product['price']}}EGP ) </span>
                                                            <span class="quantity"
                                                                  data-product-quantity="{{$product['qty']}}">x{{$product['qty']}}</span>
                                                        </div>
                                                        <a class="remove-from-cart"
                                                           rel="nofollow"
                                                           href="javascript: void(0)"
                                                           data-link-action="remove-from-cart"
                                                           title="remove from cart">
                                                            <i class="fa fa-trash-o" data-product-id="{{$key}}"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="cart-subtotals">
                                        <div class="products">
                                            <span class="value"> Subtotal </span>
                                            <span id="product-subtotal"
                                                  data-product-subtotal="{{ App\Models\Cart::total() }}"
                                                  class="label"> ( {{ App\Models\Cart::total() }}EGP ) </span>
                                        </div>
                                        <div class="shipping">
                                            <span class="value">Shipping</span>
                                            <span class="label"> ( Free ) </span>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <span class="value">Total</span>
                                        <span id="product-total" data-product-total="{{ App\Models\Cart::total() }}"
                                              class="label"> ( {{ App\Models\Cart::total() }}EGP ) </span>
                                    </div>
                                    <div class="cart-buttons d-flex">
                                        <a id="checkout-btn"
                                           class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
