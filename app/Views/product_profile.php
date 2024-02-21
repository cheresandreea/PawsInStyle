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
<!--            <div class="container">-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="fw-divider-space hidden-below-lg mt-130"></div>-->
<!--                    <div class="fw-divider-space hidden-above-lg mt-60"></div>-->
<!---->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <h1>PawInStyle</h1>-->
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


        <section class="ls s-pt-70 s-pb-20 s-pb-sm-70 s-py-lg-100 s-py-xl-150 c-gutter-60">
            <div class="container">
                <div class="row">

                    <div class="d-none d-lg-block divider-70"></div>

                    <main class="col-lg-7 col-xl-9 order-lg-2">
                        <div class="product">

                            <div class="images" data-columns="4">
                                <figure>
                                    <div data-thumb="<?= base_url()?>/public/profile_photos/<?= $product["photo"]?>">
                                        <a href="<?= base_url()?>/public/profile_photos/<?= $product["photo"]?>">
                                            <img src="<?= base_url()?>/public/profile_photos/<?= $product["photo"] ?>" alt="" data-caption="" data-src="<?= base_url()?>/public/profile_photos/" data-large_image="<?= base_url()?>/public/profile_photos/" data-large_image_width="1000" data-large_image_height="1000">
                                        </a>
                                    </div>

                                    <div data-thumb="<?= base_url()?>/public/frontend/images/shop/10_back.jpg">
                                        <a href="<?= base_url()?>/public/frontend/images/shop/10_back.jpg">
                                            <img src="<?= base_url()?>/public/frontend/images/shop/10_back.jpg" alt="" data-caption="" data-src="<?= base_url()?>/public/frontend/images/shop/10_back.jpg" data-large_image="<?= base_url()?>/public/frontend/images/shop/10_back.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                        </a>
                                    </div>

                                    <div data-thumb="<?= base_url()?>/public/frontend/images/shop/10.jpg">
                                        <a href="<?= base_url()?>/public/frontend/images/shop/10.jpg">
                                            <img src="<?= base_url()?>/public/frontend/images/shop/10.jpg" alt="" data-caption="" data-src="<?= base_url()?>/public/frontend/images/shop/10.jpg" data-large_image="<?= base_url()?>/public/frontend/images/shop/10.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                        </a>
                                    </div>


                                </figure>
                            </div>

                            <div class="summary entry-summary">

                                <h1 class="product_title entry-title"><?= $product["title"]?></h1>
                                <div class="woocommerce-product-rating">
                                    <div class="star-rating">
                                        <span style="width:<?= $product["rating"] * 20 ?>%">Rated <strong class="rating"><?= $product["rating"]?></strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
                                    </div>
                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">3</span> customer
                                        reviews)</a>
                                </div>

                                <p class="price">
										<span>
											<span>$</span><?= $product["price"]?>
										</span>
                                </p>
                                <div>
                                    <p><?= $product["description"]?>.</p>
                                </div>

                                <form method="post" action="<?=base_url()?>/homepage/addCart">
                                    <input name="product_id" value="<?=$product["product_id"]?>" hidden/>
                                    <table class="variations">
                                        <tbody>
                                        <tr>
                                            <td class="label">
                                                <label for="pa_size">Size</label>
                                            </td>
                                            <td class="value">

                                                <select id="pa_size" class="wc-default-select" name="attribute_pa_size" data-attribute_name="attribute_pa_size">

                                                    <option value="" class="attached enabled">Select a size</option>
                                                    <?php foreach ($sizes as $size): ?>
                                                        <option value="<?= $size['size_id']?>" class="attached enabled"><?= $size['size']?></option>
                                                    <?php endforeach; ?>

                                                </select>
                                                <a class="reset_variations" href="#">Clear</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>


                                    <div class="single_variation_wrap">
                                        <div>
                                                <div class="quantity">
                                                    <input type="button" value="+" class="plus">
                                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                    <input type="number" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" size="4">
                                                    <input type="button" value="-" class="minus">
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>

<!--                                                <button type="submit" class="btn">Add to cart</button>-->


                                            <button rel="nofollow" type="submit" class="button product_type_simple add_to_cart_button">Add to
                                                cart</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="product_meta">


										<span class="sku_wrapper">SKU: <span class="sku">N/A</span>
										</span>


                                    <span class="posted_in">Categories: <a href="shop-left.html" rel="tag"><?= $product['category_name']?></a></span>
                                    <span class="tagged_as">Tag: <a href="shop-left.html" rel="tag">premium</a></span>


                                </div>


                            </div>
                            <!-- .summary -->

                            <!--
    IF WE WANT to create bootstrap tabs:
    in WordPress theme We shall override tabs template
    adding 'nav nav-tabs' to 'ul.tabs'
    adding 'nav-item' to 'li'
    adding 'nav-link' to 'a'
    wrap all tabs to tab-content
    but .active is turns not on A but on LI, not as in bootstrap
-->
                            <div class="woocommerce-tabs wc-tabs-wrapper">

                                <ul class="tabs wc-tabs" role="tablist">
                                    <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                        <a href="#tab-description">Description</a>
                                    </li>
                                    <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                        <a href="#tab-reviews">Reviews (3)</a>
                                    </li>
                                </ul>

                                <div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    <p><?= $product["description"]?>.</p>
                                </div>

                                <div class="panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

                                    <h2>Information</h2>

                                    <table class="shop_attributes">
                                        <tbody>
                                        <tr>
                                            <th>Color</th>
                                            <td>
                                                <p>Blue</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td>
                                                <p>X Small, Small, Medium, Large, X Large, XX Large, XXX Large</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                                    <div id="reviews">
                                        <div id="comments">
                                            <h2>3 reviews for <span>Ship Your Idea</span>
                                            </h2>


                                            <ol class="commentlist">
                                                <li class="comment even thread-even depth-1" id="li-comment-34">

                                                    <div id="comment-34" class="comment_container">

                                                        <img alt="" src="http://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=60&amp;d=mm&amp;r=g" srcset="http://2.gravatar.com/avatar/babdd787a9577a0e615246ac79cf2826?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
                                                        <div class="comment-text">

                                                            <div class="star-rating">
																	<span style="width:80%">Rated <strong
                                                                            class="rating">4</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong>James
                                                                    Koster</strong> <span>–</span>
                                                                <time datetime="2013-06-07T11:43:13+00:00">June 7, 2013
                                                                </time>
                                                            </p>

                                                            <div class="description">
                                                                <p>Nice T-shirt, I got one in black. Goes with
                                                                    anything!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- #comment-## -->
                                                <li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">

                                                    <div id="comment-35" class="comment_container">

                                                        <img alt="" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
                                                        <div class="comment-text">

                                                            <div class="star-rating">
																	<span style="width:80%">Rated <strong
                                                                            class="rating">4</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong >Cobus
                                                                    Bester</strong> <span>–</span>
                                                                <time datetime="2013-06-07T11:55:15+00:00">June 7, 2013
                                                                </time>
                                                            </p>

                                                            <div class="description">
                                                                <p>Very comfortable shirt, and I love the graphic!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- #comment-## -->
                                                <li class="comment even thread-even depth-1" id="li-comment-36">

                                                    <div id="comment-36" class="comment_container">

                                                        <img alt="" src="http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=60&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=120&amp;d=mm&amp;r=g 2x" class="avatar avatar-60 photo" height="60" width="60">
                                                        <div class="comment-text">

                                                            <div class="star-rating">
																	<span style="width:100%">Rated <strong
                                                                            class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong >Stuart</strong>
                                                                <span>–</span>
                                                                <time datetime="2013-06-07T13:02:14+00:00">June 7, 2013
                                                                </time>
                                                            </p>

                                                            <div class="description">
                                                                <p>Great T-shirt quality, Great Design and Great
                                                                    Service.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- #comment-## -->
                                            </ol>


                                        </div>


                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a review <small>
																<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>
															</small>
														</span>
                                                    <form action="/" method="post" id="commentform" class="comment-form" novalidate="">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span>
                                                            Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label>Your rating</label>
                                                            <p class="stars">
																	<span>
																		<a class="star-1" href="#">1</a>
																		<a class="star-2" href="#">2</a>
																		<a class="star-3" href="#">3</a>
																		<a class="star-4" href="#">4</a>
																		<a class="star-5" href="#">5</a>
																	</span>
                                                            </p>
                                                        </div>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span class="required">*</span>
                                                            </label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="">

                                    </textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name <span class="required">*</span>
                                                            </label>
                                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span class="required">*</span>
                                                            </label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="btn btn-outline-maincolor" value="Submit">

                                                        </p>
                                                    </form>
                                                </div>
                                                <!-- #respond -->
                                            </div>
                                        </div>


                                        <div class="clear">

                                        </div>
                                    </div>
                                </div>

                            </div>


<!--                            <section class="up-sells upsells products">-->
<!---->
<!--                                <h2>You may also like</h2>-->
<!---->
<!--                                <ul class="products">-->
<!--                                    --><?php //foreach ($products as $product): ?>
<!--                                        <li class="product">-->
<!--                                            <a href="shop-product-left.html">-->
<!--                                                <span class="onsale">Sale!</span>-->
<!--                                                <img src="--><?php //= base_url()?><!--/public/frontend/images/shop/07.jpg" alt="">-->
<!--                                                <h2>--><?php //= $product["title"]?><!--</h2>-->
<!--                                                <div class="star-rating">-->
<!--                                                    <span style="width:--><?php //= $product["rating"] * 20?><!--">Rated <strong class="rating">--><?php //= $product["rating"]?><!--</strong> out of 5</span>-->
<!--                                                </div>-->
<!--                                                <span class="price">-->
<!--                                                        <span>-->
<!--                                                            <span>$</span>--><?php //= $product["price"]?>
<!--                                                        </span>-->
<!--                                                        –-->
<!--                                                        <span>-->
<!--                                                            <span>$</span>--><?php //= $product["price"]?>
<!--                                                        </span>-->
<!--                                                    </span>-->
<!--                                            </a>-->
<!--                                            <a rel="nofollow" href="shop-product-left.html" data-quantity="1" data-product_id="40" data-product_sku="" class="button product_type_variable add_to_cart_button">Select-->
<!--                                                options</a>-->
<!--                                        </li>-->
<!--                                    --><?php //endforeach; ?>
<!--                                </ul>-->
<!---->
<!--                            </section>-->


                            <section class="related products">

                                <h2>Related products</h2>

                                <ul class="products">

                                    <?php foreach ($products_of_certain_category as $product): ?>
                                        <li class="product">
                                            <a href="<?= base_url() ?>/homepage/profile/<?= $product["product_id"] ?>">
                                                <img src="<?= base_url() ?>/public/profile_photos/<?= $product["photo"] ?>" alt="">
                                                <h2><?= $product["title"]?></h2>
                                                <div class="star-rating">
                                                    <span style="width:<?= $product["rating"] * 20 ?>%">Rated <strong class="rating"><?= $product["rating"]?></strong> out of 5</span>
                                                </div>
                                                <span class="price">
                                                        <span>
                                                            <span>$</span><?= $product["price"]?>
                                                        </span>
                                                    </span>
                                            </a>
<!--                                            <a rel="nofollow" href="#" data-quantity="1" data-product_id="56" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>-->
                                        </li>
                                    <?php endforeach; ?>

                                </ul>

                            </section>


                        </div>
                        <!-- #product-22 -->


                    </main>

                    <aside class="col-lg-5 col-xl-3 order-lg-1">
                        <div class="widget woocommerce widget_product_categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="product-categories">
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
                            </ul>
                        </div>


                        <div class="widget widget_product_search widget_search">

                            <h3 class="widget-title">Search</h3>

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
                            <a href="<?= base_url()?>/public/frontend/images/square/01.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/01.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/02.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/02.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/03.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/03.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/04.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/04.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/05.jpg" class="photoswipe-link" data-width="800" data-height="800" data-iframe="https://www.youtube.com/embed/mcixldqDIEQ">
                                <img src="<?= base_url()?>/public/frontend/images/square/05.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/06.jpg" class="photoswipe-link" data-width="800" data-height="800" data-iframe="//player.vimeo.com/video/1084537">
                                <img src="<?= base_url()?>/public/frontend/images/square/06.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/07.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/07.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/08.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/08.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/09.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/09.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/10.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/10.jpg" alt="">
                            </a>
                            <a href="<?= base_url()?>/public/frontend/images/square/11.jpg" class="photoswipe-link" data-width="800" data-height="800">
                                <img src="<?= base_url()?>/public/frontend/images/square/11.jpg" alt="">
                            </a>

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
