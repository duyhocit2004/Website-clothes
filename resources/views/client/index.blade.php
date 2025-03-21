<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/qtyler/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:20:04 GMT -->
<head>
    @extends('client.layout.head');
</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a
    href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<div class="preloader">
    <div class="preloader_image"></div>
</div>
<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline"
              action="https://html.modernwebtemplates.com/qtyler/">
            <div class="form-group bottommargin_0"><input type="text" value="" name="search" class="form-control"
                                                          placeholder="Search keyword" id="modal-search-input"></div>
            <button type="submit" class="theme_button color1 no_bg_button">Search</button>
        </form>
    </div>
</div>
<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->
    </div>
</div>
<!-- eof .modal -->
<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">
        <!-- template sections -->
        <section class="page_topline ds background_cover">
            <div class="container-fluid">
                <div class="row flex-wrap v-center">
                    <div class="col-xs-12 col-md-8 text-center text-md-left">
                        <div class="inline-content big-spacing"> <span>
						<i class="qtyler-phone rightpadding_5"></i>
						0-800-123-4567
					</span> <span>
						<i class="qtyler-envelope rightpadding_5"></i>
						<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__"
                           data-cfemail="017075786d6473416479606c716d642f626e6c">[email&#160;protected]</a>
					</span> <span>
						<i class="qtyler-map-marker rightpadding_5"></i>
						248 Hedge St, NJ 07201
					</span></div>
                    </div>
                    <div class="col-xs-12 col-md-4 text-center text-md-right ">
                        <!-- 					<div class="widget_search">
                    <form method="get" class="searchform form-inline" action="./">
                        <div class="form-group-wrap">
                            <div class="form-group with_button margin_0">
                                <label class="sr-only" for="topline-search">Search for:</label>
                                <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                                <button type="submit" class="theme_button">Search</button>
                            </div>
                        </div>
                    </form>
                </div> -->
                        <div class="dropdown search-dropdown"><a id="search" data-target="#" href="index.html"
                                                                 data-toggle="dropdown" aria-haspopup="true"
                                                                 role="button" aria-expanded="false"
                                                                 class="theme_button small_button round_button bg_button margin_0">

                                <i class="qtyler-search" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu ls" role="menu" aria-labelledby="search">
                                <div class="widget_search">
                                    <form method="get" class="searchform form-inline"
                                          action="https://html.modernwebtemplates.com/qtyler/">
                                        <div class="form-group-wrap">
                                            <div class="form-group with_button margin_0"><label class="sr-only"
                                                                                                for="topline-search">Search
                                                    for:</label> <input id="topline-search" type="text" value=""
                                                                        name="search" class="form-control"
                                                                        placeholder="Search Keyword">
                                                <button type="submit" class="theme_button">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <i class="qtyler-close dropdown-close" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header class="page_header header_white header_v1 toggler_xxs_right">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 display-flex v-center">
                        <div class="header_left_logo"><a href="index.html" class="logo">
                                <img src="images/logo.png" alt="">
                            </a></div>
                        <div class="header_mainmenu text-center">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home</a></li>
                                            <li><a href="index-static.html">Home static intro</a></li>
                                            <li><a href="index-single.html">Home single page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Company</a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="team.html">Management</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="equipment.html">Equipment</a></li>
                                            <li><a href="partnership.html">Partnership</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Pages</a>
                                        <ul>
                                            <!-- features -->
                                            <li><a href="shortcodes_teasers.html">Shortcodes &amp; Widgets</a>
                                                <ul>
                                                    <li><a href="shortcodes_typography.html">Typography</a></li>
                                                    <li><a href="shortcodes_buttons.html">Buttons</a></li>
                                                    <li><a href="shortcodes_teasers.html">Teasers</a></li>
                                                    <li><a href="shortcodes_progress.html">Progress</a></li>
                                                    <li><a href="shortcodes_tabs.html">Tabs &amp; Collapse</a></li>
                                                    <li><a href="shortcodes_bootstrap.html">Bootstrap Elements</a></li>
                                                    <li><a href="shortcodes_widgets.html">Widgets</a></li>
                                                    <li><a href="shortcodes_animation.html">Animation</a></li>
                                                    <li><a href="shortcodes_icons.html">Template Icons</a></li>
                                                    <li><a href="shortcodes_socialicons.html">Social Icons</a></li>
                                                </ul>
                                            </li>
                                            <!-- eof features -->
                                            <!-- gallery -->
                                            <li><a href="gallery-regular.html">Gallery</a>
                                                <ul>
                                                    <!-- Gallery regular -->
                                                    <li><a href="gallery-regular.html">Gallery Regular</a>
                                                        <ul>
                                                            <li><a href="gallery-regular.html">1 column</a></li>
                                                            <li><a href="gallery-regular-2-cols.html">2 columns</a></li>
                                                            <li><a href="gallery-regular-3-cols.html">3 columns</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery regular -->
                                                    <!-- Gallery full width -->
                                                    <li><a href="gallery-fullwidth.html">Gallery Full Width</a>
                                                        <ul>
                                                            <li><a href="gallery-fullwidth.html">2 column</a></li>
                                                            <li><a href="gallery-fullwidth-3-cols.html">3 columns</a>
                                                            </li>
                                                            <li><a href="gallery-fullwidth-4-cols.html">4 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery full width -->
                                                    <!-- Gallery extended -->
                                                    <li><a href="gallery-extended.html">Gallery Extended</a>
                                                        <ul>
                                                            <li><a href="gallery-extended.html">1 column</a></li>
                                                            <li><a href="gallery-extended-2-cols.html">2 columns</a>
                                                            </li>
                                                            <li><a href="gallery-extended-3-cols.html">3 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery extended -->
                                                    <!-- Gallery carousel -->
                                                    <li><a href="gallery-carousel.html">Gallery Carousel</a>
                                                        <ul>
                                                            <li><a href="gallery-carousel.html">1 column</a></li>
                                                            <li><a href="gallery-carousel-2-cols.html">2 columns</a>
                                                            </li>
                                                            <li><a href="gallery-carousel-3-cols.html">3 columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery carousel -->
                                                    <!-- Gallery tile -->
                                                    <li><a href="gallery-tile.html">Gallery Tile</a></li>
                                                    <!-- eof Gallery tile -->
                                                    <!-- 										Gallery left sidebar
<li>
<a href="gallery-left.html">Gallery Left Sidebar</a>
<ul>
    <li>
        <a href="gallery-left.html">1 column</a>
    </li>
    <li>
        <a href="gallery-left-2-cols.html">2 columns</a>
    </li>
</ul>
</li>
eof Gallery left sidebar

Gallery right sidebar
<li>
 <a href="gallery-right.html">Gallery Right Sidebar</a>
<ul>
    <li>
        <a href="gallery-right.html">1 column</a>
    </li>
    <li>
        <a href="gallery-right-2-cols.html">2 columns</a>
    </li>
</ul>
</li>
eof Gallery right sidebar -->
                                                    <!-- Gallery side media -->
                                                    <li><a href="gallery-side-media.html">Gallery Side Media</a></li>
                                                    <!-- eof Gallery side media -->
                                                    <!-- Gallery item -->
                                                    <li><a href="gallery-single.html">Gallery Item</a>
                                                        <ul>
                                                            <li><a href="gallery-single.html">Style 1</a></li>
                                                            <li><a href="gallery-single2.html">Style 2</a></li>
                                                            <li><a href="gallery-single3.html">Style 3</a></li>
                                                            <li><a href="gallery-single4.html">Style 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery item -->
                                                </ul>
                                            </li>
                                            <!-- eof Gallery -->
                                            <li><a href="timetable.html">Timetable</a></li>
                                            <!-- events -->
                                            <li><a href="events-left.html">Events</a>
                                                <ul>
                                                    <li><a href="events-left.html">Left Sidebar</a></li>
                                                    <li><a href="events-right.html">Right Sidebar</a></li>
                                                    <li><a href="events-full.html">Full Width</a></li>
                                                    <li><a href="event-single-left.html">Single Event</a>
                                                        <ul>
                                                            <li><a href="event-single-left.html">Left Sidebar</a></li>
                                                            <li><a href="event-single-right.html">Right Sidebar</a></li>
                                                            <li><a href="event-single-full.html">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof events -->
                                            <li><a href="comingsoon1.html">Comingsoon</a>
                                                <ul>
                                                    <li><a href="comingsoon1.html">Comingsoon</a></li>
                                                    <li><a href="comingsoon2.html">Comingsoon 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="faq.html">FAQ</a>
                                                <ul>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="faq2.html">FAQ 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="404.html">404</a>
                                                <ul>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="4042.html">404 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- eof pages -->
                                    <li><a href="#">Features</a>
                                        <div class="mega-menu">
                                            <ul class="mega-menu-row">
                                                <li class="mega-menu-col"><a href="#">Headers</a>
                                                    <ul>
                                                        <li><a href="header1.html">Header Type 1</a></li>
                                                        <li><a href="header2.html">Header Type 2</a></li>
                                                        <li><a href="header3.html">Header Type 3</a></li>
                                                        <li><a href="header4.html">Header Type 4</a></li>
                                                        <li><a href="header5.html">Header Type 5</a></li>
                                                        <li><a href="header6.html">Header Type 6</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col"><a href="#">Side Menus</a>
                                                    <ul>
                                                        <li><a href="header_side1.html">Slide Left Light</a></li>
                                                        <li><a href="header_side2.html">Slide Right Light</a></li>
                                                        <li><a href="header_side3.html">Push Left Light</a></li>
                                                        <li><a href="header_side4.html">Push Right Light</a></li>
                                                        <li><a href="header_side5.html">Slide Left Dark</a></li>
                                                        <li><a href="header_side6.html">Slide Right Dark</a></li>
                                                        <li><a href="header_side7.html">Push Left Dark</a></li>
                                                        <li><a href="header_side8.html">Push Right Dark</a></li>
                                                        <li><a href="header_side_superfish.html">Superfish Menu</a></li>
                                                        <li><a href="header_side_sticked.html">Sticked Menu</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col"><a href="breadcrumbs1.html">Breadcrumbs</a>
                                                    <ul>
                                                        <li><a href="breadcrumbs1.html">Breadcrumbs 1</a></li>
                                                        <li><a href="breadcrumbs2.html">Breadcrumbs 2</a></li>
                                                        <li><a href="breadcrumbs3.html">Breadcrumbs 3</a></li>
                                                        <li><a href="breadcrumbs4.html">Breadcrumbs 4</a></li>
                                                        <li><a href="breadcrumbs5.html">Breadcrumbs 5</a></li>
                                                        <li><a href="breadcrumbs6.html">Breadcrumbs 6</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col"><a href="footer1.html">Footers</a>
                                                    <ul>
                                                        <li><a href="footer1.html">Footer Type 1</a></li>
                                                        <li><a href="footer2.html">Footer Type 2</a></li>
                                                        <li><a href="footer3.html">Footer Type 3</a></li>
                                                        <li><a href="footer4.html">Footer Type 4</a></li>
                                                        <li><a href="footer5.html">Footer Type 5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col"><a href="copyright1.html">Copyrights</a>
                                                    <ul>
                                                        <li><a href="copyright1.html">Copyrights 1</a></li>
                                                        <li><a href="copyright2.html">Copyrights 2</a></li>
                                                        <li><a href="copyright3.html">Copyrights 3</a></li>
                                                        <li><a href="copyright4.html">Copyrights 4</a></li>
                                                        <li><a href="copyright5.html">Copyrights 5</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- eof mega menu -->
                                    </li>
                                    <!-- eof features -->
                                    <!-- shop -->
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-product.html">Single Product</a></li>
                                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                                            <li><a href="shop-checkout.html">Checkout</a></li>
                                            <li><a href="shop-register.html">Registration</a></li>
                                        </ul>
                                    </li>
                                    <!-- eof shop -->
                                    <!-- blog -->
                                    <li><a href="blog-right.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-full.html">No Sidebar</a></li>
                                            <li><a href="blog-mosaic.html">Blog Grid</a></li>
                                            <li><a href="blog-single-right.html">Post</a>
                                                <ul>
                                                    <li><a href="blog-single-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-single-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-single-full.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-single-video-right.html">Video Post</a>
                                                <ul>
                                                    <li><a href="blog-single-video-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-single-video-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-single-video-full.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- eof blog -->
                                    <!-- contacts -->
                                    <li><a href="contact.html">Contact</a>
                                        <ul>
                                            <li><a href="contact.html">Contact 1</a></li>
                                            <li><a href="contact2.html">Contact 2</a></li>
                                            <li><a href="contact3.html">Contact 3</a></li>
                                            <li><a href="contact4.html">Contact 4</a></li>
                                        </ul>
                                    </li>
                                    <!-- eof contacts -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler --><span class="toggle_menu"><span></span></span>
                        </div>
                        <div class="header_right_buttons text-right">
                            <ul class="inline-dropdown inline-block">
                                <li class="dropdown login-dropdown"><a id="login" data-target="#" href="index.html"
                                                                       data-toggle="dropdown" aria-haspopup="true"
                                                                       role="button" aria-expanded="false"
                                                                       class="theme_button small_button round_button bg_button margin_0">
                                        <i class="qtyler-user" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu small-text darklinks" aria-labelledby="login"><strong
                                            class="grey">currency</strong><br> <a href="#" class="active">usd</a><br> <a
                                            href="#">eur</a><br> <a href="#">gbp</a>
                                        <hr>
                                        <strong class="grey">My Account</strong><br> <a href="#">log in</a><br> <a
                                            href="#">register</a></div>
                                </li>
                                <li class="dropdown cart-dropdown"><a id="cart" data-target="#" href="index.html"
                                                                      data-toggle="dropdown" aria-haspopup="true"
                                                                      role="button" aria-expanded="false"
                                                                      class="theme_button small_button round_button bg_button margin_0">
                                        <i class="qtyler-shop-bag" aria-hidden="true"></i>

                                        <span class="count">3</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="cart">
                                        <div class="widget widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="cart_list product_list_widget">
                                                    <li class="media">
                                                        <div class="media-left media-middle"><a
                                                                href="shop-product.html">
                                                                <img src="images/shop/03.jpg" alt="">
                                                            </a></div>
                                                        <div class="media-body media-middle"><a href="#" class="remove"
                                                                                                title="Remove this item"></a>
                                                            <p class="darklinks"><a href="shop-product.html">Heather
                                                                    grey pullover</a></p> <span
                                                                class="product-quantity">
								<span class="price">$29.95</span> <span>x 1</span> </span>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left media-middle"><a
                                                                href="shop-product.html">
                                                                <img src="images/shop/05.jpg" alt="">
                                                            </a></div>
                                                        <div class="media-body media-middle"><a href="#" class="remove"
                                                                                                title="Remove this item"></a>
                                                            <p class="darklinks"><a href="shop-product.html">Slim short
                                                                    dress</a></p> <span class="product-quantity">
								<span class="price">$34.95</span> <span>x 2</span> </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p class="total grey"><span>Subtotal:</span> <span
                                                        class="price">$69.94</span></p>
                                                <p class="buttons"><a href="shop-cart.html" class="theme_button">View
                                                        cart</a> <a href="shop-cart.html" class="theme_button color1">Checkout</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown social-dropdown"><a id="social" data-target="#" href="index.html"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        role="button" aria-expanded="false"
                                                                        class="theme_button small_button round_button bg_button margin_0">
                                        <i class="qtyler-share" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu"><a class="social-icon socicon-facebook dark-icon"
                                                                  href="#" title="Facebook"></a> <a
                                            class="social-icon socicon-googleplus dark-icon" href="#"
                                            title="Google Plus"></a> <a class="social-icon socicon-linkedin dark-icon"
                                                                        href="#" title="Linkedin"></a> <a
                                            class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a>
                                        <a class="social-icon socicon-instagram dark-icon" href="#"
                                           title="Instagram"></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="intro_section page_mainslider cs all-scr-cover">
            <div class="flexslider" data-dots="false" data-nav="true">
                <ul class="slides">
                    <li>
                        <div class="slide-image-wrap"><img src="images/slide01.jpg" alt=""/></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="light_bg_color small-text">women's textile</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="hero-text">2k<i>18</i></span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="small-text big-spacing">Summer Collection</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <div class="slide_buttons"><a href="shop.html"
                                                                              class="theme_button min_width_button">go
                                                        to shop</a></div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                    <li>
                        <div class="slide-image-wrap"><img src="images/slide02.jpg" alt=""/></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="light_bg_color small-text">men's textile</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="hero-text">2k<i>18</i></span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="small-text big-spacing">Summer Collection</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <div class="slide_buttons"><a href="shop.html"
                                                                              class="theme_button min_width_button">go
                                                        to shop</a></div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                    <li>
                        <div class="slide-image-wrap"><img src="images/slide03.jpg" alt=""/></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="light_bg_color small-text">children's textile</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="hero-text">2k<i>18</i></span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <p><span class="small-text big-spacing">Summer Collection</span></p>
                                            </div>
                                            <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                <div class="slide_buttons"><a href="shop.html"
                                                                              class="theme_button min_width_button">go
                                                        to shop</a></div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                </ul>
            </div>
            <!-- eof flexslider -->
        </section>
        <section id="about" class="ls section_padding_top_150 section_padding_bottom_150">
            <div class="container">
                <div class="row flex-wrap v-center">
                    <div class="col-md-6"><img src="images/about.png" alt="" class="about-cover"></div>
                    <div class="col-md-6">
                        <h2 class="section_header">Organic Textilles</h2>
                        <p class="small-text grey">for a better future</p>
                        <p>We’re an eco-friendly company certified by Control Union certifications with GOTS and Organic
                            Content Standard (Organic 100 and Organic Blended) and able to produce a wide range of
                            organic cotton, bamboo and Tencel clothing. We located in Aegean,
                            one of the best regions in the world in high quality organic cotton production.</p>
                        <div class="toppadding_40 visible-lg"></div>
                        <div class="content-justify v-center v-spacing"><img src="images/stamps.png" alt=""> <img
                                src="images/signature.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="products" class="ls fluid_padding_0 columns_padding_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section_header">Featured Products</h2>
                        <div class="filters carousel_filters"><a href="#" data-filter="*">All</a> <a href="#"
                                                                                                     data-filter=".men">Men</a>
                            <a href="#" data-filter=".women">Women</a> <a href="#" data-filter=".kids">Kids</a></div>
                        <div class="owl-carousel products-carousel gallery-carousel" data-nav="true" data-dots="false"
                             data-responsive-xlg="5" data-responsive-sm="3" data-responsive-xs="2"
                             data-responsive-xxs="1" data-filters=".carousel_filters" data-margin="30">
                            <article class="product vertical-item text-center with-corner-label men">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/01.jpg" alt=""/>
                                            <img src="images/shop/01-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product1-gal]"
                                                    href="images/shop/01.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product1-gal]"
                                                    href="images/shop/01-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label hot">hot</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Black tank top</a></h3>
                                    <div class="price"><span class="amount">$24.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center men">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/02.jpg" alt=""/>
                                            <img src="images/shop/02-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product2-gal]"
                                                    href="images/shop/02.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product2-gal]"
                                                    href="images/shop/02-1.jpg"></a></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">White pullover</a></h3>
                                    <div class="price"><span class="amount">$19.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center with-corner-label women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/03.jpg" alt=""/>
                                            <img src="images/shop/03-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product3-gal]"
                                                    href="images/shop/03.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product3-gal]"
                                                    href="images/shop/03-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label sale">sale</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Heather grey pullover</a></h3>
                                    <div class="price"><span class="amount">$29.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/04.jpg" alt=""/>
                                            <img src="images/shop/04-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product4-gal]"
                                                    href="images/shop/04.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product4-gal]"
                                                    href="images/shop/04-1.jpg"></a></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">White sport bra</a></h3>
                                    <div class="price"><span class="amount">$14.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center with-corner-label women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/05.jpg" alt=""/>
                                            <img src="images/shop/05-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product5-gal]"
                                                    href="images/shop/05.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product5-gal]"
                                                    href="images/shop/05-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label new">new</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Slim short dress</a></h3>
                                    <div class="price"><span class="amount">$34.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center with-corner-label women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/06.jpg" alt=""/>
                                            <img src="images/shop/06-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product6-gal]"
                                                    href="images/shop/06.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product6-gal]"
                                                    href="images/shop/06-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label hot">hot</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Black t-shirt</a></h3>
                                    <div class="price"><span class="amount">$9.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/07.jpg" alt=""/>
                                            <img src="images/shop/07-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product7-gal]"
                                                    href="images/shop/07.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product7-gal]"
                                                    href="images/shop/07-1.jpg"></a></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Heather grey long sleeve crop
                                            top</a></h3>
                                    <div class="price"><span class="amount">$19.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center with-corner-label men">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/08.jpg" alt=""/>
                                            <img src="images/shop/08-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product8-gal]"
                                                    href="images/shop/08.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product8-gal]"
                                                    href="images/shop/08-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label sale">sale</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">Heather grey hoodie</a></h3>
                                    <div class="price"><span class="amount">$19.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center men">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/09.jpg" alt=""/>
                                            <img src="images/shop/09-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product9-gal]"
                                                    href="images/shop/09.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product9-gal]"
                                                    href="images/shop/09-1.jpg"></a></div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">White tucked sleeves t-shirt</a>
                                    </h3>
                                    <div class="price"><span class="amount">$9.95</span></div>
                                </div>
                            </article>
                            <article class="product vertical-item text-center with-corner-label women">
                                <div class="item-media-wrap bottommargin_25">
                                    <div class="item-media"><a href="shop-product.html">
                                            <img src="images/shop/10.jpg" alt=""/>
                                            <img src="images/shop/10-1.jpg" alt=""/>
                                        </a>
                                        <div class="product_buttons darklinks"><a href="#" class="add_to_cart"
                                                                                  data-toggle="tooltip"
                                                                                  title="Add to Cart">
                                                <i class="qtyler-shop-bag"></i>
                                                <span class="sr-only">Add to cart</span>
                                            </a> <a href="#" class="add_to_wishlist" data-toggle="tooltip"
                                                    title="Add to Wishlist">
                                                <i class="qtyler-heart"></i>
                                                <span class="sr-only">Add to Wishlist</span>
                                            </a> <a class="p-view prettyPhoto " data-gal="prettyPhoto[product10-gal]"
                                                    href="images/shop/10.jpg" data-toggle="tooltip"
                                                    title="Expand Photo">
                                                <i class="qtyler-external"></i>
                                                <span class="sr-only">Expand Photo</span>
                                            </a> <a class="p-view prettyPhoto sr-only" title=""
                                                    data-gal="prettyPhoto[product10-gal]"
                                                    href="images/shop/10-1.jpg"></a></div>
                                    </div>
                                    <div class="corner-label new">new</div>
                                </div>
                                <div class="item-content">
                                    <h3 class="entry-title"><a href="shop-product.html">White pullover</a></h3>
                                    <div class="price"><span class="amount">$29.95</span></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-form" class="ls section_padding_top_150 section_padding_bottom_150">
            <div class="container">
                <div class="row flex-wrap v-center">
                    <div class="col-xs-12 col-md-5 col-md-push-6"><img src="images/tailoring.jpg" alt=""
                                                                       class="contact-form-cover"></div>
                    <div class="col-xs-12 col-md-7 col-md-pull-5">
                        <h2 class="section_header">Custom Tailoring</h2>
                        <p class="small-text grey">for cheapest price</p>
                        <div class="toppadding_5"></div>
                        <form class="contact-form row columns_padding_10" method="post"
                              action="https://html.modernwebtemplates.com/qtyler/">
                            <div class="col-xs-12">
                                <div class="form-group"><input type="text" aria-required="true" size="30" value=""
                                                               name="name" id="name" class="form-control with_icon"
                                                               placeholder="Your Name"> <i class="qtyler-user grey"></i>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group"><input type="email" aria-required="true" size="30" value=""
                                                               name="email" id="email" class="form-control with_icon"
                                                               placeholder="Email Address"> <i
                                        class="qtyler-envelope grey"></i></div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group"><input type="tel" size="30" value="" name="phone" id="phone"
                                                               class="form-control with_icon"
                                                               placeholder="Phone Number"> <i
                                        class="qtyler-phone grey"></i></div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group"><textarea aria-required="true" rows="3" cols="45" name="message"
                                                                  id="message" class="form-control with_icon"
                                                                  placeholder="Message"></textarea> <i
                                        class="qtyler-comment grey"></i></div>
                            </div>
                            <div class="col-xs-12 bottommargin_0">
                                <div class="contact-form-submit">
                                    <button type="submit" id="contact_form_submit" name="contact_submit"
                                            class="theme_button min_width_button margin_0">Order tailoring
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonials"
                 class="ls ms parallax overlay_color section_padding_top_150 section_padding_bottom_150">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1"
                             data-dots="true" data-nav="true">
                            <blockquote>
                                <div class="avatar"><img src="images/faces/01.jpg" alt=""></div>
                                <p>Thanks so much!! I have received my order on time as promised! I love the shirt -
                                    it's perfect! I look forward to ordering more shirts from your company!</p> <cite>Elaine
                                    Allen</cite></blockquote>
                            <blockquote>
                                <div class="avatar"><img src="images/faces/02.jpg" alt=""></div>
                                <p>Thank you very much for making the process easy. I will remember the good treatment
                                    when I have a need for services such as yours. Thank You!</p> <cite>Adam
                                    Farnsworth</cite></blockquote>
                            <blockquote>
                                <div class="avatar"><img src="images/faces/03.jpg" alt=""></div>
                                <p>Got the suit on yesterday and I love it! Please tell everyone that worked on it that
                                    I am very pleased and will order again.</p> <cite>Patricia Diaz</cite></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="ls section_padding_top_150 section_padding_bottom_150">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section_header text-center">News &amp; Events</h2>
                        <p class="small-text grey">our blogs</p>
                        <div class="row columns_margin_bottom_20">
                            <div class="isotope-item col-xs-12 col-md-6">
                                <article class="vertical-item content-absolute content-caption">
                                    <div class="item-media"><a href="blog-single-right.html">
                                            <img src="images/blog-square/01.jpg" alt="">
                                        </a>
                                        <div class="entry-meta-corner"><a href="blog-single-left.html">
                                                <time datetime="2017-10-03T08:50:40+00:00">20 jun</time>
                                            </a></div>
                                    </div>
                                    <div class="item-content ls">
                                        <h3 class="entry-title small"><a href="blog-single-right.html">Ferragamo:
                                                Bringing the French Riviera to Italian menswear</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <article class="side-item side-md">
                                    <div class="row v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="item-media"><a href="blog-single-right.html">
                                                    <img src="images/blog-square/02.jpg" alt="">
                                                </a></div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="item-content">
                                                <div class="entry-meta small-text greylinks"> <span class="date">
												<a href="blog-single-left.html">
													<time datetime="2017-10-03T08:50:40+00:00">19 jun</time>
												</a>
                							</span></div>
                                                <h3 class="entry-title small"><a href="blog-single-right.html">Bold and
                                                        beautiful: Gustav Klimt inspires Turnbull & Asser</a></h3> <a
                                                    href="blog-single-right.html" class="more-link">more</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <article class="side-item side-md">
                                    <div class="row v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="item-media"><a href="blog-single-right.html">
                                                    <img src="images/blog-square/03.jpg" alt="">
                                                </a></div>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <div class="item-content">
                                                <div class="entry-meta small-text greylinks"> <span class="date">
												<a href="blog-single-left.html">
													<time datetime="2017-10-03T08:50:40+00:00">15 jun</time>
												</a>
                							</span></div>
                                                <h3 class="entry-title small"><a href="blog-single-right.html">The
                                                        middle ground of modern menswear at Hardy Amies</a></h3> <a
                                                    href="blog-single-right.html" class="more-link">more</a></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-social" class="ls with_top_border columns_margin_0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="page_social"><a class="social-icon socicon-facebook dark-icon" href="#"
                                                    title="Facebook"></a> <a
                                class="social-icon socicon-googleplus dark-icon" href="#" title="Google Plus"></a> <a
                                class="social-icon socicon-linkedin dark-icon" href="#" title="Linkedin"></a> <a
                                class="social-icon socicon-twitter dark-icon" href="#" title="Twitter"></a> <a
                                class="social-icon socicon-instagram dark-icon" href="#" title="Instagram"></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_150 section_padding_bottom_150">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                        <h2 class="section_header small">Our Newsletter</h2>
                        <p class="small-text grey">subscribe</p>
                        <div class="widget widget_mailchimp">
                            <form class="signup" action="https://html.modernwebtemplates.com/qtyler/" method="get">
                                <div class="form-group"><input class="mailchimp_email form-control" name="email"
                                                               type="email" placeholder="Email Address">
                                    <button type="submit" class="theme_button">Sign Up!</button>
                                </div>
                                <div class="response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery" class="ls fluid_padding_0 columns_padding_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5"
                             data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3"
                             data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/01.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/01.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]"
                                                           title="" href="images/gallery/02.jpg">
                                        <img src="images/gallery-square/02.jpg" alt="">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/03.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/03.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/04.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/04.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/05.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/05.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/06.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/06.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/07.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/07.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/08.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/08.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/09.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/09.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/10.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/10.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/11.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/11.jpg">
                                    </a></div>
                            </div>
                            <div class="vertical-item">
                                <div class="item-media"><img src="images/gallery-square/12.jpg" alt=""> <a
                                        class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title=""
                                        href="images/gallery/12.jpg">
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="footer-fullwidth" class="ls columns_margin_0 fluid_padding_0 columns_padding_0">
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="widget widget_instagram">
                <div class="instafeed">

                </div>
            </div>
        </div>
    </div>
</div>
</section>
-->
        <footer class="page_footer ls section_padding_top_150 section_padding_bottom_140 columns_margin_bottom_30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4 text-center text-md-left">
                        <div class="widget widget_text">
                            <div class="logo"><img src="images/logo.png" alt=""></div>
                            <ul class="list-unstyled greylinks">
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-phone"></i></div>
                                        <div class="media-body"> 0-80vv-123-4567</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-envelope"></i></div>
                                        <div class="media-body"><a
                                                href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#5477"><span
                                                    class="__cf_email__"
                                                    data-cfemail="413035382d2433012439202c312d246f222e2c">[email&#160;protected]</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-map-marker"></i></div>
                                        <div class="media-body"> 248 Hedge St, NJ 07201</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
                        <div class="widget widget_text">
                            <h3 class="widget-title">Hours</h3>
                            <ul class="feature-list">
                                <li><span>Weekdays</span> <span>8:00 - 20:00</span></li>
                                <li><span>Saturday</span> <span>9:00 - 16:00</span></li>
                                <li><span>Sunday</span> <span>Closed</span></li>
                                <li><span>Holidays</span> <span>10:00 - 14:00</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
                        <div class="widget widget_text">
                            <h3 class="widget-title">Details</h3>
                            <ul class="list-unstyled greylinks">
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-delivery"></i></div>
                                        <div class="media-body"> Worldwide 100% Free Shipping</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-headphones"></i></div>
                                        <div class="media-body"> Fast and Excellent Customer Support</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media small-media">
                                        <div class="media-left"><i class="qtyler-money"></i></div>
                                        <div class="media-body"> 100% Moneyback Guarantee</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="page_copyright ds background_cover section_padding_top_10 section_padding_bottom_10">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center"> &copy; Copyright 2018 All Rights Reserved</div>
                </div>
            </div>
        </section>
    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
@extends('client.layout.js')
</body>


<!-- Mirrored from html.modernwebtemplates.com/qtyler/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Mar 2025 14:20:04 GMT -->
</html>
