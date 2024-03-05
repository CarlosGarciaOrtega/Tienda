<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Partsix - Faq</title>
        <meta name="description" content="Morden Bootstrap HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon"
            href="assets/img/favicon.ico">

        <!-- ======= All CSS Plugins here ======== -->
        <link rel="stylesheet" href="{{url('assets/css/plugins/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/glightbox.min.css')}}">
        <link
            href="../../../css2?family=Inter:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap"
            rel="stylesheet">

        <!-- Plugin css -->
        <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap.min.css')}}">

        <!-- Custom Style CSS -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    </head>

    <body>

        <!-- Start preloader -->
        
        <!-- End preloader -->

        <!-- Start header area -->
        <header class="header__section">
            <div class="main__header header__sticky">
                <div class="container-fluid">
                    <div
                        class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                        <div class="offcanvas__header--menu__open ">
                            <a class="offcanvas__header--menu__open--btn"
                                href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon offcanvas__header--menu__open--svg"
                                    viewbox="0 0 512 512"><path
                                        fill="currentColor"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32"
                                        d="M80 160h352M80 256h352M80 352h352"></path></svg>
                                <span class="visually-hidden">Offcanvas Menu
                                    Open</span>
                            </a>
                        </div>
                        <div class="main__logo">
                            <h1 class="main__logo--title"><a
                                    class="main__logo--link"
                                    href="index.html"><img
                                        class="main__logo--img"
                                        src="{{url('assets/img/logo/nav-log.webp')}}"
                                        alt="logo-img"></a></h1>
                        </div>
                        <div class="header__menu style3 d-none d-lg-block">
                            <nav class="header__menu--navigation">
                                <ul class="header__menu--wrapper d-flex">
                                    <li class="header__menu--items">
                                        <a class="header__menu--link active"
                                            href="{{url('admin')}}">Home
                                        </a>
                                    </li>
                                    <li
                                        class="header__menu--items mega__menu--items">
                                        <a class="header__menu--link"
                                            href="{{url('admin/create')}}">Añadir Producto</a>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="header__account">
                            <ul
                                class="header__account--wrapper d-flex align-items-center">

                                <li
                                    class="header__account--items d-none d-lg-block">
                                    <a class="header__account--btn"
                                        href="{{url('admin/profile')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24"
                                            viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class=" -user"><path
                                                d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                                cx="12" cy="7"
                                                r="4"></circle></svg>
                                        <span class="visually-hidden">My
                                            account</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Offcanvas header menu -->
            <div class="offcanvas__header">
                <div class="offcanvas__inner">
                    <div class="offcanvas__logo">
                        <a class="offcanvas__logo_link" href="index.html">
                            <img src="assets/img/logo/nav-log.webp"
                                alt="Grocee Logo" width="158" height="36">
                        </a>
                        <button class="offcanvas__close--btn"
                            data-offcanvas>close</button>
                    </div>
                    <nav class="offcanvas__menu">
                        <ul class="offcanvas__menu_ul">
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item"
                                    href="index.html">Home</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="index.html"
                                            class="offcanvas__sub_menu_item">Home
                                            One</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="index-2.html"
                                            class="offcanvas__sub_menu_item">Home
                                            Two</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="index-3.html"
                                            class="offcanvas__sub_menu_item">Home
                                            Three</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="index-4.html"
                                            class="offcanvas__sub_menu_item">Home
                                            Four</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="index-5.html"
                                            class="offcanvas__sub_menu_item">Home
                                            Five</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item"
                                    href="shop.html">Shop</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="#"
                                            class="offcanvas__sub_menu_item">Column
                                            One</a>
                                        <ul class="offcanvas__sub_menu">
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="shop.html">Shop Left
                                                    Sidebar</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="shop-right-sidebar.html">Shop
                                                    Right Sidebar</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="shop-grid.html">Shop
                                                    Grid</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="shop-grid-list.html">Shop
                                                    Grid List</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="shop-list.html">Shop
                                                    List</a></li>
                                        </ul>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="#"
                                            class="offcanvas__sub_menu_item">Column
                                            Two</a>
                                        <ul class="offcanvas__sub_menu">
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="product-details.html">Product
                                                    Details</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="product-video.html">Video
                                                    Product</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="product-details.html">Variable
                                                    Product</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="product-left-sidebar.html">Product
                                                    Left Sidebar</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="product-gallery.html">Product
                                                    Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="#"
                                            class="offcanvas__sub_menu_item">Column
                                            Three</a>
                                        <ul class="offcanvas__sub_menu">
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="my-account.html">My
                                                    Account</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="my-account-2.html">My
                                                    Account 2</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="404.html">404
                                                    Page</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="login.html">Login
                                                    Page</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="faq.html">Faq
                                                    Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="offcanvas__sub_menu_li">
                                        <a href="#"
                                            class="offcanvas__sub_menu_item">Column
                                            Three</a>
                                        <ul class="offcanvas__sub_menu">
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="about.html">About
                                                    Us</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="contact.html">Contact
                                                    Us</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="portfolio.html">Portfolio</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="compare.html">Compare
                                                    Pages</a></li>
                                            <li
                                                class="offcanvas__sub_menu_li"><a
                                                    class="offcanvas__sub_menu_item"
                                                    href="checkout.html">Checkout
                                                    page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item"
                                    href="blog.html">Blog</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="blog.html"
                                            class="offcanvas__sub_menu_item">Blog
                                            Grid</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="blog-details.html"
                                            class="offcanvas__sub_menu_item">Blog
                                            Details</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="blog-left-sidebar.html"
                                            class="offcanvas__sub_menu_item">Blog
                                            Left Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="blog-right-sidebar.html"
                                            class="offcanvas__sub_menu_item">Blog
                                            Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item"
                                    href="#">Pages</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="about.html"
                                            class="offcanvas__sub_menu_item">About
                                            Us</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="contact.html"
                                            class="offcanvas__sub_menu_item">Contact
                                            Us</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="cart.html"
                                            class="offcanvas__sub_menu_item">Cart
                                            Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="portfolio.html"
                                            class="offcanvas__sub_menu_item">Portfolio
                                            Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="wishlist.html"
                                            class="offcanvas__sub_menu_item">Wishlist
                                            Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="login.html"
                                            class="offcanvas__sub_menu_item">Login
                                            Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a
                                            href="404.html"
                                            class="offcanvas__sub_menu_item">Error
                                            Page</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__menu_li"><a
                                    class="offcanvas__menu_item"
                                    href="about.html">About</a></li>
                            <li class="offcanvas__menu_li"><a
                                    class="offcanvas__menu_item"
                                    href="contact.html">Contact</a></li>
                        </ul>
                        <div class="offcanvas__account--items">
                            <a
                                class="offcanvas__account--items__btn d-flex align-items-center"
                                href="login.html">
                                <span class="offcanvas__account--items__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="20.51" height="19.443"
                                        viewbox="0 0 512 512"><path
                                            d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                            fill="none" stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="32"></path><path
                                            d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                            fill="none" stroke="currentColor"
                                            stroke-miterlimit="10"
                                            stroke-width="32"></path></svg>
                                </span>
                                <span
                                    class="offcanvas__account--items__label">Login
                                    / Register</span>
                            </a>
                        </div>
                        <div class="offcanvas__account--wrapper d-flex">
                            <div class="offcanvas__account--currency">
                                <a
                                    class="offcanvas__account--currency__menu d-flex align-items-center text-black"
                                    href="javascript:void(0)">
                                    <img src="assets/img/icon/usd-icon.webp"
                                        alt="currency">
                                    <span>USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="9.797" height="6.05"
                                        viewbox="0 0 9.797 6.05">
                                        <path
                                            d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"
                                            opacity="0.7"></path>
                                    </svg>
                                </a>
                                <div
                                    class="offcanvas__account--currency__submenu">
                                    <ul>
                                        <li class="currency__items"><a
                                                class="currency__text"
                                                href="#">CAD</a></li>
                                        <li class="currency__items"><a
                                                class="currency__text"
                                                href="#">CNY</a></li>
                                        <li class="currency__items"><a
                                                class="currency__text"
                                                href="#">EUR</a></li>
                                        <li class="currency__items"><a
                                                class="currency__text"
                                                href="#">GBP</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="language__currency--list">
                                <a class="offcanvas__language--switcher"
                                    href="javascript:void(0)">
                                    <span>English</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="9.797" height="6.05"
                                        viewbox="0 0 9.797 6.05">
                                        <path
                                            d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"
                                            opacity="0.7"></path>
                                    </svg>
                                </a>
                                <div class="offcanvas__dropdown--language">
                                    <ul>
                                        <li class="language__items"><a
                                                class="language__text"
                                                href="#">France</a></li>
                                        <li class="language__items"><a
                                                class="language__text"
                                                href="#">Russia</a></li>
                                        <li class="language__items"><a
                                                class="language__text"
                                                href="#">Spanish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Offcanvas header menu -->

            <!-- Start Offcanvas stikcy toolbar -->
            <div class="offcanvas__stikcy--toolbar">
                <ul class="d-flex justify-content-between">
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn"
                            href="index.html">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="none" width="21.51" height="21.443"
                                    viewbox="0 0 22 17"><path
                                        fill="currentColor"
                                        d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                            </span>
                            <span
                                class="offcanvas__stikcy--toolbar__label">Home</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn"
                            href="shop.html">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="18.51" height="17.443"
                                    viewbox="0 0 448 512"><path
                                        d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>
                            </span>
                            <span
                                class="offcanvas__stikcy--toolbar__label">Shop</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list ">
                        <a
                            class="offcanvas__stikcy--toolbar__btn search__open--btn"
                            href="javascript:void(0)" data-offcanvas>
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="22.51" height="20.443"
                                    viewbox="0 0 512 512"><path
                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor"
                                        stroke-miterlimit="10"
                                        stroke-width="32"></path><path
                                        fill="none" stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32"
                                        d="M338.29 338.29L448 448"></path></svg>
                            </span>
                            <span
                                class="offcanvas__stikcy--toolbar__label">Search</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a
                            class="offcanvas__stikcy--toolbar__btn minicart__open--btn"
                            href="javascript:void(0)" data-offcanvas>
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="22.706" height="22.534"
                                    viewbox="0 0 14.706 13.534">
                                    <g transform="translate(0 0)">
                                        <g>
                                            <path data-name="Path 16787"
                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                transform="translate(0 -463.248)"
                                                fill="currentColor"></path>
                                            <path data-name="Path 16788"
                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                transform="translate(-1.191 -466.622)"
                                                fill="currentColor"></path>
                                            <path data-name="Path 16789"
                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                transform="translate(-2.875 -466.622)"
                                                fill="currentColor"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span
                                class="offcanvas__stikcy--toolbar__label">Cart</span>
                            <span class="items__count">3</span>
                        </a>
                    </li>
                    <li class="offcanvas__stikcy--toolbar__list">
                        <a class="offcanvas__stikcy--toolbar__btn"
                            href="wishlist.html">
                            <span class="offcanvas__stikcy--toolbar__icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewbox="0 0 24 24"
                                    fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class=" -heart"><path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                            </span>
                            <span
                                class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                            <span class="items__count">3</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Offcanvas stikcy toolbar -->

            <!-- Start offCanvas minicart -->
            <div class="offCanvas__minicart">
                <div class="minicart__header ">
                    <div
                        class="minicart__header--top d-flex justify-content-between align-items-center">
                        <h3 class="minicart__title"> Shopping Cart</h3>
                        <button class="minicart__close--btn"
                            aria-label="minicart close btn" data-offcanvas>
                            <svg class="minicart__close--icon"
                                xmlns="http://www.w3.org/2000/svg"
                                viewbox="0 0 512 512"><path fill="currentColor"
                                    stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32"
                                    d="M368 368L144 144M368 144L144 368"></path></svg>
                        </button>
                    </div>
                    <p class="minicart__header--desc">The organic foods products
                        are limited</p>
                </div>
                <div class="minicart__product">
                    <div class="minicart__product--items d-flex">
                        <div class="minicart__thumb">
                            <a href="product-details.html"><img
                                    src="assets/img/product/small-product/product1.webp"
                                    alt="prduct-img"></a>
                        </div>
                        <div class="minicart__text">
                            <h4 class="minicart__subtitle"><a
                                    href="product-details.html">Car & Motorbike
                                    Care.</a></h4>
                            <span class="color__variant"><b>Color:</b>
                                Beige</span>
                            <div class="minicart__price">
                                <span
                                    class="minicart__current--price">$125.00</span>
                                <span
                                    class="minicart__old--price">$140.00</span>
                            </div>
                            <div
                                class="minicart__text--footer d-flex align-items-center">
                                <div class="quantity__box minicart__quantity">
                                    <button type="button"
                                        class="quantity__value decrease"
                                        aria-label="quantity value"
                                        value="Decrease Value">-</button>
                                    <label>
                                        <input type="number"
                                            class="quantity__number" value="1"
                                            data-counter>
                                    </label>
                                    <button type="button"
                                        class="quantity__value increase"
                                        aria-label="quantity value"
                                        value="Increase Value">+</button>
                                </div>
                                <button class="minicart__product--remove"
                                    type="button">Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="minicart__product--items d-flex">
                        <div class="minicart__thumb">
                            <a href="product-details.html"><img
                                    src="assets/img/product/small-product/product2.webp"
                                    alt="prduct-img"></a>
                        </div>
                        <div class="minicart__text">
                            <h4 class="minicart__subtitle"><a
                                    href="product-details.html">Engine And
                                    Drivetrain.</a></h4>
                            <span class="color__variant"><b>Color:</b>
                                Green</span>
                            <div class="minicart__price">
                                <span
                                    class="minicart__current--price">$115.00</span>
                                <span
                                    class="minicart__old--price">$130.00</span>
                            </div>
                            <div
                                class="minicart__text--footer d-flex align-items-center">
                                <div class="quantity__box minicart__quantity">
                                    <button type="button"
                                        class="quantity__value decrease"
                                        aria-label="quantity value"
                                        value="Decrease Value">-</button>
                                    <label>
                                        <input type="number"
                                            class="quantity__number" value="1"
                                            data-counter>
                                    </label>
                                    <button type="button"
                                        class="quantity__value increase"
                                        aria-label="quantity value"
                                        value="Increase Value">+</button>
                                </div>
                                <button class="minicart__product--remove"
                                    type="button">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="minicart__amount">
                    <div
                        class="minicart__amount_list d-flex justify-content-between">
                        <span>Sub Total:</span>
                        <span><b>$240.00</b></span>
                    </div>
                    <div
                        class="minicart__amount_list d-flex justify-content-between">
                        <span>Total:</span>
                        <span><b>$240.00</b></span>
                    </div>
                </div>
                <div class="minicart__conditions text-center">
                    <input class="minicart__conditions--input" id="accept"
                        type="checkbox">
                    <label class="minicart__conditions--label" for="accept">I
                        agree with the <a class="minicart__conditions--link"
                            href="privacy-policy.html">Privacy
                            Policy</a></label>
                </div>
                <div class="minicart__button d-flex justify-content-center">
                    <a class="primary__btn minicart__button--link"
                        href="cart.html">View cart</a>
                    <a class="primary__btn minicart__button--link"
                        href="checkout.html">Checkout</a>
                </div>
            </div>
            <!-- End offCanvas minicart -->

            <!-- Start serch box area -->
            <div class="predictive__search--box ">
                <div class="predictive__search--box__inner">
                    <h2 class="predictive__search--title">Search Products</h2>
                    <form class="predictive__search--form" action="#">
                        <label>
                            <input class="predictive__search--input"
                                placeholder="Search Here" type="text">
                        </label>
                        <button class="predictive__search--button text-white"
                            aria-label="search button"><svg
                                class="product__items--action__btn--svg"
                                xmlns="http://www.w3.org/2000/svg" width="30.51"
                                height="25.443" viewbox="0 0 512 512"><path
                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor"
                                    stroke-miterlimit="10"
                                    stroke-width="32"></path><path fill="none"
                                    stroke="currentColor" stroke-linecap="round"
                                    stroke-miterlimit="10" stroke-width="32"
                                    d="M338.29 338.29L448 448"></path></svg>
                        </button>
                    </form>
                </div>
                <button class="predictive__search--close__btn"
                    aria-label="search close" data-offcanvas>
                    <svg class="predictive__search--close__icon"
                        xmlns="http://www.w3.org/2000/svg" width="40.51"
                        height="30.443" viewbox="0 0 512 512"><path
                            fill="currentColor" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"
                            d="M368 368L144 144M368 144L144 368"></path></svg>
                </button>
            </div>
            <!-- End serch box area -->

        </header>
        <!-- End header area -->

        <main class="main__content_wrapper">
           @yield('content')
        </main>

        <!-- Start footer section -->
        <footer class="footer__section footer__bg">
            <div class="container">
                <div class="newsletter__area">
                    <div
                        class="newsletter__inner d-flex justify-content-between align-items-center">
                        <div class="newsletter__content">
                            <h2 class="newsletter__title">Subscribe <span
                                    class="text__secondary">Newsletter</span></h2>
                            <p class="newsletter__desc">Don’t wait make a smart
                                & logical quote here. Its pretty easy.</p>
                        </div>
                        <div class="newsletter__subscribe">
                            <form class="newsletter__subscribe--form"
                                action="#">
                                <label>
                                    <input class="newsletter__subscribe--input"
                                        placeholder=" Enter Your Email"
                                        type="text">
                                </label>
                                <button class="newsletter__subscribe--button"
                                    type="submit">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main__footer">
                    <div class="row ">
                        <div class="col-lg-4 col-md-10">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title">About Us
                                    <button class="footer__widget--button"
                                        aria-label="footer widget button"></button>
                                    <svg
                                        class="footer__widget--title__arrowdown--icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="12.355" height="8.394"
                                        viewbox="0 0 10.355 6.394">
                                        <path
                                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <div class="footer__widget--inner">
                                    <p class="footer__widget--desc">Corporate
                                        clients and leisure travelers has
                                        been relying on Groundlink for
                                        dependable
                                        safe, and professional chauffeured car
                                        end
                                        service in major cities across
                                        World.</p>
                                    <ul
                                        class="social__share footer__social d-flex">
                                        <li class="social__share--list">
                                            <a
                                                class="social__share--icon__style2"
                                                target="_blank"
                                                href="https://www.facebook.com">
                                                <svg width="11" height="17"
                                                    viewbox="0 0 9 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span
                                                    class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a
                                                class="social__share--icon__style2"
                                                target="_blank"
                                                href="https://twitter.com">
                                                <svg width="16" height="14"
                                                    viewbox="0 0 14 12"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span
                                                    class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a
                                                class="social__share--icon__style2"
                                                target="_blank"
                                                href="https://www.instagram.com">
                                                <svg width="16" height="15"
                                                    viewbox="0 0 14 13"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span
                                                    class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a
                                                class="social__share--icon__style2"
                                                target="_blank"
                                                href="https://www.pinterest.com">
                                                <svg width="16" height="17"
                                                    viewbox="0 0 14 15"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span
                                                    class="visually-hidden">Pinterest</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">My Account
                                    <button class="footer__widget--button"
                                        aria-label="footer widget button"></button>
                                    <svg
                                        class="footer__widget--title__arrowdown--icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="12.355" height="8.394"
                                        viewbox="0 0 10.355 6.394">
                                        <path
                                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul
                                    class="footer__widget--menu footer__widget--inner">

                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="my-account.html">My
                                            Account</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="cart.html">Shopping
                                            Cart</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="cart.html">Login</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="login.html">Register</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">Resources
                                    <button class="footer__widget--button"
                                        aria-label="footer widget button"></button>
                                    <svg
                                        class="footer__widget--title__arrowdown--icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="12.355" height="8.394"
                                        viewbox="0 0 10.355 6.394">
                                        <path
                                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul
                                    class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="contact.html">Contact
                                            Us</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="about.html">About Us</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="wishlist.html">Wishlist</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="privacy-policy.html">Privacy
                                            Policy</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="faq.html">Frequently</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">FIND IT FAST
                                    <button class="footer__widget--button"
                                        aria-label="footer widget button"></button>
                                    <svg
                                        class="footer__widget--title__arrowdown--icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="12.355" height="8.394"
                                        viewbox="0 0 10.355 6.394">
                                        <path
                                            d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                            transform="translate(-6 -8.59)"
                                            fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul
                                    class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="shop.html">Smartphone
                                            ablet</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="shop.html">Computer
                                            Laptop</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="shop.html">TV & Audio</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="shop.html">Car
                                            Accessories</a></li>
                                    <li class="footer__widget--menu__list"><a
                                            class="footer__widget--menu__text"
                                            href="shop.html">Cameras
                                            Photos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div
                        class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                        <div class="footer__logo">
                            <a class="footer__logo--link" href="index.html"><img
                                    src="assets/img/logo/nav-log-light.webp"
                                    alt="logo-img"></a>
                        </div>
                        <p class="copyright__content"><span
                                class="text__secondary">© 2022</span> Powered by
                            <a class="copyright__content--link" target="_blank"
                                href="https://themeforest.net/search/hooktheme">Hooktheme</a>
                            . All Rights Reserved.</p>
                        <div class="footer__payment">
                            <img src="assets/img/icon/payment-img.webp"
                                alt="payment-img">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer section -->

        <!-- Scroll top bar -->
        <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg"
                class="ionicon" viewbox="0 0 512 512"><path fill="none"
                    stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="48"
                    d="M112 244l144-144 144 144M256 120v292"></path></svg></button>

        <!-- All Script JS Plugins here  -->
        <script src="{{url('assets/js/vendor/popper.js')}}" defer="defer"></script>
        <script src="{{url('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
        <script src="{{url('assets/js/plugins/swiper-bundle.min.js')}}"></script>
        <script src="{{url('assets/js/plugins/glightbox.min.js')}}"></script>

        <!-- Customscript js -->
        <script src="assets/js/script.js"></script>

    </body>
</html>