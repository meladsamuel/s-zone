<!-- begin index.tpl -->
<!doctype html>
<html lang="ar">
<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>my-szone</title>
    <meta name="keywords" content="">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
    <link rel="icon" type="image/vnd.microsoft.icon" href="/savemart/img/favicon.ico?1531456858">
    <link rel="shortcut icon" type="image/x-icon" href="/savemart/img/favicon.ico?1531456858">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700,900" rel="stylesheet">


    <link rel="stylesheet"
          href="{{asset("css/main.css")}}"
          type="text/css" media="all">


    <script type="text/javascript">
        var added_to_wishlist = "The product was successfully added to your wishlist.";
        var isLogged = false;
        var isLoggedWishlist = false;
        var loggin_required = "You must be logged in to manage your wishlist.";
        var prestashop = {};
        var psr_icon_color = "#F19D76";
        var search_url = "";
    </script>


    <script type="text/javascript">
        var baseDir = "/";
        var static_token = "{{csrf_token()}}";
    </script>


    <style>
        #main-site {
            background-color: #ffffff;
        }

        @media (min-width: 1200px) {
            .container {
                width: 1200px;
            }

            #header .container {
                width: 1200px;
            }

            .footer .container {
                width: 1200px;
            }

            #index .container {
                width: 1200px;
            }
        }

    </style>

</head>
<body id="index" class="lang-ar lang-rtl country-gb currency-gbp layout-full-width page-index tax-display-enabled">


<main id="main-site" class="displayhomenovthree">


    <header id="header" class="header-3 sticky-menu">
        @include('front.includes.header-mobile')
        @include('front.includes.header-top')
        @include('front.includes.header-center')
        @include('front.includes.header-bottom')
    </header>

    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-flex align-items-center col-xl-3 col-md-3">
                    <div class="contentstickynew_verticalmenu"></div>
                    <div class="contentstickynew_logo"></div>
                </div>
                <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
            </div>
        </div>
    </div>


    <aside id="notifications">
        <div class="container">


        </div>
    </aside>


    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            @yield('content')
        </div>
    </div>

    @include('front.includes.footer')
    <div class="canvas-overlay"></div>
    <div id="back-top">
  <span>
    <i class="fa fa-long-arrow-up"></i>  </span>
    </div>
</main>

<div id="mobile_top_menu_wrapper" class="hidden-md-up">
    <div class="content">
        <div id="_mobile_verticalmenu"></div>
    </div>
</div>


<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Menu</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content">
            <div id="_mobile_top_menu" class="js-top-menu"></div>
        </div>
    </div>
</div>
<div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box">Cart</div>
            <div class="close-box">Close</div>
        </div>
        <div id="_mobile_cart" class="box-content"></div>
    </div>
</div>
<div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="Account">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="back-box">Back</div>
            <div class="title-box">Account</div>
            <div class="close-box">Close</div>
        </div>
        <div class="box-content d-flex justify-content-center align-items-center text-center">
            <div>
                <div id="_mobile_account_list">
                    <div class="account-list-content">
                        <div>
                            <a class="login" href="/login"
                               rel="nofollow" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Sign
                                in</a>
                        </div>
                        <div>
                            <a class="register" href="/register"
                               rel="nofollow" title="Register Account"><i class="fa fa-user"></i>Register Account</a>
                        </div>
                        <div>
                            <a class="check-out" href="#"
                               rel="nofollow" title="Checkout"><i class="material-icons">check_circle</i>Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center hidden-md-up text-center">
    <div class="stickymenu-item"><a href="/"><i
                class="zmdi zmdi-home"></i><span>Home</span></a></div>
    <div class="stickymenu-item"><a href="#" class="js-btn-search"><i
                class="zmdi zmdi-search"></i><span>Search</span></a></div>
    <div class="stickymenu-item">
        <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
    </div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
                class="zmdi zmdi-account-o"></i><span>Account</span></a></div>
</div>


<script type="text/javascript" src="{{asset('/js/bottom-3c96ed23.js')}}"></script>
@yield("script")


</body>
</html>
<!-- end index.tpl -->
