<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Beautiqua</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/animations.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="<?= base_url()?>/public/frontend/css/shop.css" class="color-switcher-link">
    <script src="<?= base_url()?>/public/frontend/js/vendor/modernizr-custom.js"></script>

    <!--[if lt IE 9]>
    <script src="<?= base_url()?>/public/frontend/js/vendor/html5shiv.min.js"></script>
    <script src="<?= base_url()?>/public/frontend/js/vendor/respond.min.js"></script>
    <script src="<?= base_url()?>/public/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div><!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

        <!--topline section visible only on small screens|-->

        <!--"sectionClass": "ds s-borderbottom c-my-10 d-lg-none",-->
        <!--"containerClassSuffix": "-fluid",-->
        <!--"includes": "../top-includes/social-icons.html",-->
        <!--"includes2": "../top-includes/search-modal-button.html"-->
        <!--})-->
        <!--eof topline-->

        <section class="page_topline ls ms s-py-5 top-1">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <div class="top-includ">
                            <!--user action-->
                            <div class="dropdown">
                                <a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-bag"></i>
                                    <span class="badge bg-maincolor"><?=count($cart)?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right ls">
                                    <div class="widget woocommerce widget_shopping_cart">


                                        <div class="widget_shopping_cart_content">

                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">

                                                <?php for ($i = 0; $i < count($cart); $i++): ?>

                                                    <!---->
                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
                                                        <a href="shop-product-right.html">
                                                            <img src="<?= base_url() ?>/public/profile_photos/<?= $cart[$i]['photo']?>" alt=""><?= $cart[$i]['title']?>
                                                        </a>

                                                        <span class="quantity"><?= $cart[$i]['quantity']?> ×
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                        <?= $cart[$i]['price']?>
                                                                    </span>
                                                                </span>
                                                    </li>

                                                <?php endfor; ?>
                                            </ul>

                                            <p class="woocommerce-mini-cart__total total">
                                                <strong>Subtotal:</strong>
                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														<?= $total?>
													</span>
                                            </p>

                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="<?=base_url()?>/homepage/cart" class="button wc-forward">View cart</a>
                                                <!--                                                <a href="shop-cart.html" class="button wc-forward checkout">checkout</a>-->
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--login form -->
                            <div class="dropdown">
                                <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-profile"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-center">

                                    <div class="dropdown-top">
                                        <a href="">log in</a>
                                        <a href="">register</a>
                                    </div>

                                    <form>

                                        <div class="form-group has-placeholder">

                                            <i class="flaticon-profile"></i>
                                            <input type="text" class="form-control" placeholder="login">
                                        </div>

                                        <div class="form-group has-placeholder">

                                            <i class="grey flaticon-unlock"></i>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>

                                        <div class="checkbox">
                                            <input type="checkbox">

                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="">

                                        </div>

                                        <button type="submit" class="btn btn-outline-maincolor text-center">Log In</button>

                                    </form>

                                </div>
                                <!--.dropdown menu-->
                            </div>
                            <!--modal search-->
                            <span>
									<a href="#" class="search_modal_button">
										<i class="flaticon-search"></i>
									</a>
								</span>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- header with two Bootstrap columns - left for logo and right for navigation -->
        <header class="page_header ls">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-8 col-xl-2 text-left">
                        <a href="<?= base_url()?>/homepage/">
                            <img style="width: 180px; margin:0; padding: 0;" src="<?= base_url()?>/public/frontend/images/pawsinstyle.png" alt="">
                        </a>

                    </div>
                    <div class="col-xl-8 col-1 text-center">
                        <!-- main nav start -->
                        <nav class="top-nav">
                            <ul class="nav sf-menu">

                                <li class="active">
                                    <a href="<?= base_url()?>/homepage/" style="font-size: 20px" index.html">Home</a>
                                </li>

                            </ul>


                        </nav>
                        <!-- eof main nav -->
                    </div>
                    <div class="col-1 col-xl-2 ">
                        <div class="header-includ">
                            <!--user action-->
                            <div class="dropdown">
                                <a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-bag"></i>
                                    <span class="badge bg-maincolor"><?=count($cart)?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right ls">
                                    <div class="widget woocommerce widget_shopping_cart">


                                        <div class="widget_shopping_cart_content">

                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">

                                                <?php for ($i = 0; $i < count($cart); $i++): ?>

                                                    <li class="woocommerce-mini-cart-item mini_cart_item">
                                                        <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
                                                        <a href="shop-product-right.html">
                                                            <img src="<?= base_url() ?>/public/profile_photos/<?= $cart[$i]['photo']?>" alt=""><?= $cart[$i]['title']?>
                                                        </a>

                                                        <span class="quantity"><?= $cart[$i]['quantity']?> ×
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                                        <?= $cart[$i]['title']?>
                                                                    </span>
                                                                </span>
                                                    </li>
                                                <?php endfor; ?>


                                            </ul>

                                            <p class="woocommerce-mini-cart__total total">
                                                <strong>Subtotal:</strong>
                                                <span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>
														<?= $total?>
													</span>
                                            </p>

                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="<?=base_url()?>/homepage/cart" class="button wc-forward">View cart</a>
                                                <a href="<?= base_url()?>/homepage/checkout" class="button wc-forward checkout">checkout</a>
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--login form -->
                            <div class="dropdown">
                                <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon-profile"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-center">

                                    <div class="dropdown-top">
                                        <a href="">log in</a>
                                        <a href="">register</a>
                                    </div>

                                    <form>

                                        <div class="form-group has-placeholder">

                                            <i class="flaticon-profile"></i>
                                            <input type="text" class="form-control" placeholder="login">
                                        </div>

                                        <div class="form-group has-placeholder">

                                            <i class="grey flaticon-unlock"></i>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>

                                        <div class="checkbox">
                                            <input type="checkbox">

                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="">

                                        </div>

                                        <button type="submit" class="btn btn-outline-maincolor text-center">Log In</button>

                                    </form>

                                </div>
                                <!--.dropdown menu-->
                            </div>
                            <!--modal search-->
                            <span>
									<a href="#" class="search_modal_button">
										<i class="flaticon-search"></i>
									</a>
								</span>

                        </div>

                    </div>
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu"><span></span></span>
        </header>

<!--        <section class="page_title s-parallax s-overlay ls title-overlay s-py-25">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="fw-divider-space hidden-below-lg mt-130"></div>-->
<!--                    <div class="fw-divider-space hidden-above-lg mt-60"></div>-->
<!---->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <h1>Shopping Cart</h1>-->
<!--                        -->
<!--                    </div>-->
<!---->
<!--                    <div class="fw-divider-space hidden-below-lg mt-130"></div>-->
<!--                    <div class="fw-divider-space hidden-above-lg mt-60"></div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

        <div class="container-fluid">
            <div class="image-container" style="background-color: white; position: relative; display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="<?= base_url() ?>/public/profile_photos/cris.jpeg" alt="Image Description" style="width: 100%; height: 150px">
                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.5); z-index: 1;"></div>
                <div class="col-md-12 text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
                    <h1 style="color: #f89bcb; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;">PawsInStyle</h1>
                </div>
            </div>
        </div>


        <section class="ls s-py-70 s-py-lg-100 s-py-xl-150">
            <div class="container">
                <div class="row">


                    <main class="col-lg-12">
<!--                        <div class="woocommerce-message">-->
<!--                            "Premium quality" removed. <a href="#">Undo?</a>-->
<!--                        </div>-->

                        <form class="woocommerce-cart-form" action="/" method="post">

                            <table class="shop_table shop_table_responsive cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-quantity">Size</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php for ($i = 0; $i < count($cart); $i++): ?>
                                    <tr class="cart_item">

                                            <td class="product-remove">
                                                <a href="#" class="remove" aria-label="Remove this item">×</a>
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="shop-product-right.html"><?= $cart[$i]['title']?></a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                        <span class="amount">
                                                            <span>$</span><?= $cart[$i]['price']?>
                                                        </span>
                                            </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <input type="button" value="+" class="plus">
                                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                    <input type="number" class="input-text qty text" step="1" min="1" max="<?= $cart[$i]['max_quantity']?>" name="quantity" value=<?= $cart[$i]['quantity']?> title="Qty" size="4">
                                                    <input type="button" value="-" class="minus">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                            </td>

                                            <td class="product-size" data-title="Size">
                                                <div class="size">
                                                    <i> <?= $cart[$i]['size_name']?> </i>
                                                </div>
                                            </td>

                                            <td class="product-subtotal" data-title="Total">
                                                        <span class="amount">
                                                            <span>$</span><?= $cart[$i]['price'] * $cart[$i]['quantity']?>
                                                        </span>
                                            </td>
                                    </tr>
                                <?php endfor; ?>

                                </tbody>

                                <div class="cart_totals ">


                                    <h2>Cart totals</h2>

                                    <table class="shop_table shop_table_responsive d-table">

                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
													<span class="amount">
														<span>$</span><?= $total ?>
													</span>
                                            </td>
                                        </tr>


                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong>
                                                <span class="amount">
                                                    <span>$</span><?= $total ?>
                                                </span>
                                                </strong>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>

                                    <div class="wc-proceed-to-checkout">

                                        <a href="<?= base_url()?>/homepage/checkout" class="checkout-button button alt wc-forward">
                                            Proceed to checkout</a>
                                    </div>


                                </div>

                            </table>
                        </form>

                        <div class="cart-collaterals">

                            <div class="cross-sells">

                                <h2>You may be interested in…</h2>

                                <ul class="products">

<!--                                    <li class="product type-product">-->
<!--                                        <a href="shop-product-right.html">-->
<!--                                            <img src="images/shop/04.jpg" class="" alt="">-->
<!--                                            <h2>Woo Ninja 2</h2>-->
<!--                                            <div class="star-rating">-->
<!--													<span style="width:80%">Rated <strong class="rating">4.00-->
<!--                        </strong> out of 5</span>-->
<!--                                            </div>-->
<!--                                            <span class="price">-->
<!--													<span class="amount">-->
<!--														<span>$</span>34.00-->
<!--													</span>-->
<!--												</span>-->
<!--                                        </a>-->
<!--                                        <a rel="nofollow" href="shop-cart.html" data-quantity="1" data-product_id="47" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add-->
<!--                                            to cart</a>-->
<!--                                    </li>-->
<!---->
<!--                                    <li class="product type-product">-->
<!--                                        <a href="shop-product-right.html">-->
<!--                                            <img src="images/shop/05.jpg" class="" alt="">-->
<!--                                            <h2>Woo Ninja</h2>-->
<!--                                            <span class="price">-->
<!--													<span class="amount">-->
<!--														<span>$</span>20.00-->
<!--													</span>-->
<!--												</span>-->
<!--                                        </a>-->
<!--                                        <a rel="nofollow" href="shop-cart.html" data-quantity="1" data-product_id="34" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add-->
<!--                                            to cart</a>-->
<!--                                    </li>-->
<!---->
<!---->
<!--                                    <li class="product type-product">-->
<!--                                        <a href="shop-product-right.html">-->
<!--                                            <img src="images/shop/06.jpg" class="" alt="">-->
<!--                                            <h2>Woo Ninja</h2>-->
<!--                                            <div class="star-rating">-->
<!--													<span style="width:90%">Rated <strong class="rating">4.50-->
<!--                        </strong> out of 5</span>-->
<!--                                            </div>-->
<!--                                            <span class="price">-->
<!--													<span class="amount">-->
<!--														<span>$</span>35.00-->
<!--													</span>-->
<!--												</span>-->
<!--                                        </a>-->
<!--                                        <a rel="nofollow" href="shop-cart.html" data-quantity="1" data-product_id="47" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add-->
<!--                                            to cart</a>-->
<!--                                    </li>-->
<!---->
<!---->
<!--                                    <li class="product type-product">-->
<!--                                        <a href="shop-product-right.html">-->
<!--                                            <img src="images/shop/01.jpg" class="" alt="">-->
<!--                                            <h2>Woo Ninja 5</h2>-->
<!--                                            <div class="star-rating">-->
<!--													<span style="width:80%">Rated <strong class="rating">4.00-->
<!--                        </strong> out of 5</span>-->
<!--                                            </div>-->
<!--                                            <span class="price">-->
<!--													<span class="amount">-->
<!--														<span>$</span>39.00-->
<!--													</span>-->
<!--												</span>-->
<!--                                        </a>-->
<!--                                        <a rel="nofollow" href="shop-cart.html" data-quantity="1" data-product_id="47" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add-->
<!--                                            to cart</a>-->
<!--                                    </li>-->
<!---->
<!--                                    <li class="product type-product">-->
<!--                                        <a href="shop-product-right.html">-->
<!--                                            <img src="images/shop/02.jpg" class="" alt="">-->
<!--                                            <h2>Woo Ninja</h2>-->
<!--                                            <span class="price">-->
<!--													<span class="amount">-->
<!--														<span>$</span>20.00-->
<!--													</span>-->
<!--												</span>-->
<!--                                        </a>-->
<!--                                        <a rel="nofollow" href="shop-cart.html" data-quantity="1" data-product_id="34" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add-->
<!--                                            to cart</a>-->
<!--                                    </li>-->


                                </ul>

                            </div>


                        </div>


                    </main>

                </div>

            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
        </section>


        <section class="ls footer-gallery c-gutter-0 container-px-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <div class="owl-carousel small-gallery-carousel" data-margin="0" data-responsive-lg="8" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-loop="true">
                            <a href="images/square/01.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/01.jpg" alt="">
                            </a>
                            <a href="images/square/02.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/02.jpg" alt="">
                            </a>
                            <a href="images/square/03.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/03.jpg" alt="">
                            </a>
                            <a href="images/square/04.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/04.jpg" alt="">
                            </a>
                            <a href="images/square/05.jpg" class="photoswipe-link" data-width="800" data-height="800" data-iframe="https://www.youtube.com/embed/mcixldqDIEQ">
                                <img src="images/square/05.jpg" alt="">
                            </a>
                            <a href="images/square/06.jpg" class="photoswipe-link" data-width="800" data-height="800" data-iframe="//player.vimeo.com/video/1084537">
                                <img src="images/square/06.jpg" alt="">
                            </a>
                            <a href="images/square/07.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/07.jpg" alt="">
                            </a>
                            <a href="images/square/08.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/08.jpg" alt="">
                            </a>
                            <a href="images/square/09.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/09.jpg" alt="">
                            </a>
                            <a href="images/square/10.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/10.jpg" alt="">
                            </a>
                            <a href="images/square/11.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="images/square/11.jpg" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page_copyright ls">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 text-center">
                        <div class="fw-divider-space hidden-below-xl mt-65"></div>
                        <div class="fw-divider-space hidden-above-xl mt-20"></div>
                        <p>&copy; Copyright <span class="copyright_year">2018</span></p>
                        <div class="fw-divider-space hidden-below-xl mt-65"></div>
                        <div class="fw-divider-space hidden-above-xl mt-20"></div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->


<script src="<?= base_url()?>/public/frontend/js/compressed.js"></script>
<script src="<?= base_url()?>/public/frontend/js/main.js"></script>


</body>

</html>