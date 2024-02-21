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
<!---->
<!--        <section class="page_title s-parallax s-overlay ls title-overlay s-py-25">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!---->
<!--                    <div class="fw-divider-space hidden-below-lg mt-130"></div>-->
<!--                    <div class="fw-divider-space hidden-above-lg mt-60"></div>-->
<!---->
<!--                    <div class="col-md-12 text-center">-->
<!--                        <h1>Checkout</h1>-->
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

        <section class="ls s-pt-70 s-pb-20 s-pb-sm-70 s-py-lg-100 s-py-xl-150 c-gutter-60">
            <div class="container">
                <div class="row">

                    <main class="col-lg-12">
<!--                        <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>-->
<!--                        </div>-->
<!---->
<!--                        <form class="woocomerce-form woocommerce-form-login login" method="post" style="">-->
<!---->
<!---->
<!--                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer,-->
<!--                                please proceed to the Billing &amp; Shipping section.</p>-->
<!---->
<!--                            <p class="form-row form-row-first">-->
<!--                                <label for="username">Username or email <span class="required">*</span>-->
<!--                                </label>-->
<!--                                <input type="text" class="input-text" name="username" id="username">-->
<!--                            </p>-->
<!--                            <p class="form-row ">-->
<!--                                <label for="password">Password <span class="required">*</span>-->
<!--                                </label>-->
<!--                                <input class="input-text" type="password" name="password" id="password">-->
<!--                            </p>-->
<!--                            <div class="clear">-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                            <p class="form-row">-->
<!---->
<!--                                <input type="submit" class="button" name="login" value="Login">-->
<!--                                <label>-->
<!--                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever">-->
<!--                                    <span>Remember me</span>-->
<!--                                </label>-->
<!--                            </p>-->
<!--                            <p class="lost_password">-->
<!--                                <a href="shop-account-password-reset.html">Lost your password?</a>-->
<!--                            </p>-->
<!---->
<!--                            <div class="clear">-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </form>-->
<!---->
<!--                        <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a>-->
<!--                        </div>-->
<!---->
<!--                        <form class="checkout_coupon" method="post" style="display: none;">-->
<!---->
<!--                            <p class="form-row ">-->
<!--                                <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">-->
<!--                            </p>-->
<!---->
<!--                            <p class="form-row ">-->
<!--                                <input type="submit" class="button" name="apply_coupon" value="Apply coupon">-->
<!--                            </p>-->
<!---->
<!--                            <div class="clear">-->
<!---->
<!--                            </div>-->
<!--                        </form>-->

                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?=base_url()?>/homepage/addOrdercheckout" enctype="multipart/form-data" novalidate="novalidate">


                            <div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">
                                <ul class="woocommerce-error">
                                    <li><strong>Billing First name</strong> is a required field.</li>
                                    <li><strong>Billing Last name</strong> is a required field.</li>
                                    <li>Please enter a valid postcode / ZIP.</li>
                                </ul>
                            </div>

                            <div class="col2-set" id="customer_details">
                                <div class="col-1">
                                    <div class="woocommerce-billing-fields">

                                        <h4>Billing details</h4>


                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                <p class="form-row  validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                    <label for="billing_first_name" class="">
                                                        Name <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="input-text " name="name" id="billing_first_name" placeholder="" value="" autofocus="autofocus">
                                                </p>
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field" data-priority="40">
                                                    <label for="billing_country" class="">Country
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <select name="country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                        <option value="">Select a country…</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US" selected="selected">United States (US)</option>

                                                    </select>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
                                                    <label for="billing_address_1" class="">Street
                                                        address <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="input-text " name="address" id="billing_address_1" placeholder="" value="">
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="input-text " name="city" id="billing_city" placeholder="" value="">
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                    <label for="billing_postcode" class="">Postcode / ZIP <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="input-text " name="postcode" id="billing_postcode" placeholder="" value="">
                                                </p>
                                                <p class="form-row  validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                                    <label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="" value="">
                                                </p>
                                                <p class="form-row  validate-required validate-email" id="billing_email_field" data-priority="110">
                                                    <label for="billing_email" class="">Email address <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="email" class="input-text " name="email" id="billing_email" placeholder="admin@test.com" value="">
                                                </p>
                                            </div>

                                    </div>

                                </div>

                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                    </div>
                                    <div class="woocommerce-additional-fields">


                                        <h4>Additional information</h4>


                                        <div class="woocommerce-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                <label for="order_comments" class="">Order
                                                    notes</label>
                                                <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5">

                                                </textarea>
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <h4 id="order_review_heading">Your order</h4>


                            <div id="order_review" class="woocommerce-checkout-review-order">
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php for ($i = 0; $i < count($cart); $i++): ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?= $cart[$i]['title']?>&nbsp; <strong class="product-quantity">×<?= $cart[$i]['quantity']?></strong>
                                            </td>
                                            <td class="product-total">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span><?= $cart[$i]['price'] * $cart[$i]['quantity']?></span>
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                    </tbody>
                                    <tfoot>

                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span><?=$total?></span>
                                        </td>
                                    </tr>


                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol">$</span><?=$total?>
                                                    </span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>

                                <div id="payment" class="woocommerce-checkout-payment">
                                    <ul class="wc_payment_methods payment_methods methods">
                                        <li class="wc_payment_method payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="card" checked="checked" data-order_button_text="">

                                            <label for="payment_method_cheque">
                                                Card online </label>
                                            <div class="payment_box payment_method_cheque" style="display: none;">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store
                                                    Postcode.</p>
                                            </div>
                                        </li>
                                        <li class="wc_payment_method payment_method_cod">
                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cash" data-order_button_text="">

                                            <label for="payment_method_cod">
                                                Cash on delivery </label>
                                            <div class="payment_box payment_method_cod" style="display: block;">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="form-row place-order">
                                        <noscript>
                                            Since your browser does not support JavaScript, or it is disabled, please ensure you click the
                                            &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more
                                            than the amount stated above if you fail to do so. &lt;br/&gt;&lt;input type="submit"
                                            class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                                        </noscript>

                                        <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">

                                    </div>
                                </div>

                            </div>


                        </form>


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
        <footer class="page_footer overflow-hidden ls s-pt-10 mt-10 s-overlay s-parallax">
            <div class="container">
                <div class="row">
                    <div class="fw-divider-space hidden-below-xl mt-140"></div>
                    <div class="fw-divider-space hidden-below-lg d-xl-none mt-110"></div>
                    <div class="fw-divider-space hidden-above-lg mt-50"></div>
                    <div class="col-12 text-center animate" data-animation="fadeInUp">
                        <div class="widget widget_mailchimp">
                            <span class="sub-title">Subscribe</span>
                            <h2 class="special-heading">Newsletter</h2>

                            <p>
                                Subscribe newsletter to be updated, we promise not to spam
                            </p>

                            <form class="signup" action="/">
                                <label for="mailchimp_email1">
                                    <span class="screen-reader-text">Subscribe:</span>
                                </label>
                                <i class="flaticon-envelope"></i>
                                <input id="mailchimp_email1" name="email" type="email" class="form-control mailchimp_email" placeholder="Your Email">

                                <button type="submit" class="search-submit">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <div class="response"></div>
                            </form>

                        </div>
                        <div class="widget widget_social_buttons">
                            <a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a>
                            <a href="#" class="fa fa-twitter border-icon rounded-icon" title="twitter"></a>
                            <a href="#" class="fa fa-google-plus border-icon rounded-icon" title="google"></a>
                            <a href="#" class="fa fa-instagram border-icon rounded-icon" title="google"></a>
                            <a href="#" class="fa fa-youtube-play border-icon rounded-icon" title="google"></a>
                        </div>


                    </div>
                    <div class="fw-divider-space hidden-below-xl mt-140"></div>
                    <div class="fw-divider-space hidden-below-lg d-xl-none mt-110"></div>
                    <div class="fw-divider-space hidden-above-lg mt-50"></div>

                </div>
            </div>
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