<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>PawsInStyle</title>
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
        <form method="get" class="searchform search-form" action="<?=base_url()?>/homepage/index">
            <div class="form-group">
                <input type="text" name="search_title" value="<?php $title ?>">
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
                        <a href="<?=base_url()?>/homepage/" >
                                <img style="width: 180px;" src="<?= base_url()?>/public/frontend/images/pawsinstyle.png" alt="">
                        </a>

                    </div>
                    <div class="col-xl-8 col-1 text-center">
                        <!-- main nav start -->
                        <nav class="top-nav">
                            <ul class="nav sf-menu">

                                <li class="active">
                                    <a href="<?=base_url()?>/homepage/" style="font-size: 20px;" href="index.html">Home</a>
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
                                                <a href="<?=base_url()?>/homepage/cart" class="button wc-forward" ">View cart</a>
                                                <a href="shop-cart.html" class="button wc-forward checkout">checkout</a>
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
        <div class="container-fluid">
            <div class="image-container" style="background-color: white; position: relative; display: flex; justify-content: center; align-items: center; height: 100px;">
                <img src="<?= base_url() ?>/public/profile_photos/cris.jpeg" alt="Image Description" style="width: 100%; height: 150px">
                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.5); z-index: 1;"></div>
                <div class="col-md-12 text-center" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2;">
                    <h1 style="color: #f89bcb; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;">PawsInStyle</h1>
                </div>
            </div>
        </div>
<!--        </section>-->


        <section class="ls s-pt-70 s-pb-20 s-pb-sm-70 s-py-lg-100 s-py-xl-150 c-gutter-60">
            <div class="container">
                <div class="row">

                    <main class="col-lg-7 col-xl-9 order-lg-2">
                        <div class="columns-3">

                            <p class="woocommerce-result-count">
                                Showing all <?=count($products)?> results</p>

                            <ul class="products">
                                <?php foreach ($products as $product): ?>
<!--                                    <div style="flex: 1; border: 1px solid #ccc; padding: 10px; margin: 10px;">-->
                                    <li class="product">
                                        <a href="shop-product-left.html">
<!--                                            <img src="--><?php //= base_url()?><!--/profile_photos/Papuci-negri.jpg" alt="">-->
                                            <a href="<?= base_url() ?>/homepage/profile/<?= $product["product_id"] ?>">
                                                <img src="<?= base_url() ?>/public/profile_photos/<?= $product["photo"] ?>" alt="">
                                            </a>

<!--                                                !important-->
<!--                                            <span class="onsale">Sale</span>-->
<!--                                                !important-->

                                            <h2><?= $product["title"]?></h2>
                                            <div class="star-rating">
												<span style="width:<?= $product["rating"] * 20 ?>%">Rated <strong
                                                            class="rating"><?= $product["rating"]?></strong> out of 5</span>
                                            </div>
                                            <span class="price">
												<ins>
													<span>
														<span>$</span><?=$product["price"]?>
													</span>
												</ins>
											</span>
<!--                                            <p>--><?php //= $product["product_id"] ?><!--</p>-->
<!--                                            <p>--><?php //= $product["title"] ?><!--</p>-->
<!--                                            <p>--><?php //= $product["price"] ?><!--</p>-->
<!--                                            <p>--><?php //= $product["description"] ?><!--</p>-->
<!--                                            <p>--><?php //= $product["rating"] ?><!--</p>-->
<!--                                            <input type="button" value="See the article" onClick="window.location '--><?php //= base_url() ?><!--/homepage/profile/--><?php //= $product["product_id"] ?><!--'"/>-->
                                        </a>
<!--                                        <a rel="nofollow" href="--><?php //= base_url() ?><!--/homepage/profile/--><?php //= $product["product_id"] ?><!--" class="button product_type_simple add_to_cart_button">Add to-->
<!--                                            cart</a>-->
                                    </li>
                                <?php endforeach; ?>
<!--                                <li class="product">-->
<!--                                    <a href="shop-product-left.html">-->
<!--                                        <span class="onsale">Sale</span>-->
<!---->
<!--                                        <img src="-<?php ////= base_url()?><!--<!/public/frontend/images/shop/25.jpg" alt="">-->
<!---->
<!---->
<!--                                        <h2>Flying Ninja</h2>-->
<!--                                        <div class="star-rating">-->
<!--												<span style="width:50%">Rated <strong-->
<!--                                                        class="rating">2.50</strong> out of 5</span>-->
<!--                                        </div>-->
<!--                                        <span class="price">-->
<!--												<del>-->
<!--													<span>-->
<!--														<span>$</span>15.00-->
<!--													</span>-->
<!--												</del>-->
<!--												<ins>-->
<!--													<span>-->
<!--														<span>$</span>12.00-->
<!--													</span>-->
<!--												</ins>-->
<!--											</span>-->
<!--                                    </a>-->
<!--                                    <a rel="nofollow" href="shop-cart.html" class="button product_type_simple add_to_cart_button">Add to-->
<!--                                        cart</a>-->
<!--                                </li>-->
                            </ul>
                        </div>
                        <!-- columns 2 -->
                    </main>

<!--                    <form method="get" class="searchform search-form" action="--><?php //=base_url()?><!--/homepage/index">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" name="search_title" value="--><?php //$title ?><!--">-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn">Search</button>-->
<!--                    </form>-->

                    <aside class="col-lg-5 col-xl-3 order-lg-1">

                        <form method="get" class="widget woocommerce widget_product_categories" action="<?=base_url()?>/homepage/index">

                            <h3 class="widget-title">Categories</h3>
                            <ul class="product-categories">

                                <li class="cat-item cat-parent">
                                    <a style="<?=(!(isset($_GET['category'])))?'font-weight: bold':''?>" href="<?=base_url()?>/homepage/index">All</a>
                                    <span class="count"><?=$totalNumber?></span>
                                </li>
                                <?php foreach ($category as $cat): ?>
                                    <li class="cat-item cat-parent">
                                        <a style="<?=(isset($_GET['category']) && $_GET['category']==$cat["category_id"])?'font-weight: bold':''?>" href="<?=base_url()?>/homepage/index?category=<?=$cat["category_id"]?>"> <?=$cat["name"]?> </a>
                                        <span class="count"><?=$cat["numberOfItems"]?></span>
                                    </li>

                                <?php endforeach; ?>
                            </ul>

                        </form>


                        <div class="widget widget_product_search widget_search">

                            <h3 class="widget-title">Search</h3>

<!--                            <form method="get" class="searchform search-form" action="--><?php //=base_url()?><!--/homepage/index">-->
<!--                                <div class="form-group">-->
<!--                                    <input type="text" name="search_title" value="--><?php //$title ?><!--">-->
<!--                                </div>-->
<!--                                <button type="submit" class="btn">Search</button>-->
<!--                            </form>-->

                            <form method="get" class="searchform search-form" action="<?=base_url()?>/homepage/index">

                                <label class="screen-reader-text" for="woocommerce-product-search-field-widget">
                                    Search for:
                                </label>

                                <input type="search" id="woocommerce-product-search-field-widget" class="search-field form-control" placeholder="Keyword" value="<?php $title ?>" name="search_title">
                                <button type="submit" class="search-submit">
                                    <span class="screen-reader-text">Search</span>
                                </button>
                            </form>
                        </div>

                    </aside>

                </div>
            </div>
            <div class="fw-divider-space hidden-below-lg mt-50"></div>
        </section>


        <section class="ls footer-gallery c-gutter-0 container-px-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">

                        <div class="owl-carousel small-gallery-carousel" data-margin="0" data-responsive-lg="8" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-loop="true">
                            <a href="<?= base_url()?>/public/profile_photos/cris.jpeg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/profile_photos/cris.jpeg" alt="">
                            </a>
                            <?php for($i = 0; $i < count($cart); $i++): ?>
                                <a href="" ><?= $cart[$i]['photo']?></a>
                            <?php endfor; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="page_footer overflow-hidden ls s-pt-10 mt-10 s-overlay s-parallax">
        </footer>
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