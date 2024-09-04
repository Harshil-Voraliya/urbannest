<?php
require 'includes/init.php';
include pathOf('includes/header.php');
include pathOf('includes/navbar.php');
?>

<body>

    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-white d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index-2.html"><img src="<?= urlOf("assets/images/logo/logo-2.webp") ?>" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class="has-children"><a href="#"><span class="menu-text">Home</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-01.webp') ?>" alt="home-01"> <a href="index-2.html"><span class="menu-text">Arts Propelled</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-02.webp') ?>" alt="home-02"> <a href="index-3.html"><span class="menu-text">Decor Thriving</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-03.webp') ?>" alt="home-03"> <a href="index-4.html"><span class="menu-text">Savvy Delight</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-04.webp') ?>" alt="home-04"> <a href="index-5.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index-3.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-05.webp') ?>" alt="home-05"> <a href="index-6.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-06.webp') ?>" alt="home-06"> <a href="index-7.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-07.webp') ?>" alt="home-07"> <a href="index-8.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-08.webp') ?>" alt="home-08"> <a href="index-9.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index-3.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-9.webp') ?>" alt="home-9"> <a href="index-10.html"><span class="menu-text">Reblended Dish</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-10.webp') ?>" alt="home-10"> <a href="index-11.html"><span class="menu-text">Craftin House</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-11.webp') ?>" alt="home-11"> <a href="index-12.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-banner"><img src="<?= urlOf('assets/images/banner/menu-banner-1.webp') ?>" alt="Home Menu Banner"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
                                        <ul>
                                            <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                            <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                            <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                            <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT PAGES</span></a>
                                        <ul>
                                            <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                            <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                            <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                            <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                            <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                            <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                            <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                            <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                        <ul>
                                            <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                            <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                            <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                            <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                            <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                            <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                            <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                            <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="align-self-center">
                                        <a href="#" class="menu-banner"><img src="<?= urlOf('assets/images/banner/menu-banner-2.webp') ?>" alt="Shop Menu Banner"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                    <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                    <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                    <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                        <ul>
                                            <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                            <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                            <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                        <ul>
                                            <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                            <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                            <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                        <ul>
                                            <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                            <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                            <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                        <ul>
                                            <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                            <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                            <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Blog</span></a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="blog-right-sidebar.html"><span class="menu-text">Standard Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-grid-right-sidebar.html"><span class="menu-text">Grid Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-list-right-sidebar.html"><span class="menu-text">List Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Masonry Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-details-right-sidebar.html"><span class="menu-text">Single Post Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                                    <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                                    <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                                    <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                                    <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->

    <!-- Header Section Start -->
    <div class="sticky-header section bg-white section-fluid d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-auto col">
                    <div class="header-logo">
                        <a href="index-2.html"><img src="<?= urlOf('assets/images/logo/logo-2.webp') ?>" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto d-none d-xl-block">
                    <nav class="site-main-menu site-main-menu-left justify-content-center">
                        <ul>
                            <li class="has-children"><a href="#"><span class="menu-text">Home</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-01.webp') ?>" alt="home-01"> <a href="index-2.html"><span class="menu-text">Arts Propelled</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-02.webp') ?>" alt="home-02"> <a href="index-3.html"><span class="menu-text">Decor Thriving</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-03.webp') ?>" alt="home-03"> <a href="index-4.html"><span class="menu-text">Savvy Delight</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-04.webp') ?>" alt="home-04"> <a href="index-5.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index-3.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-05.webp') ?>" alt="home-05"> <a href="index-6.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-06.webp') ?>" alt="home-06"> <a href="index-7.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-07.webp') ?>" alt="home-07"> <a href="index-8.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-08.webp') ?>" alt="home-08"> <a href="index-9.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="index-3.html" class="mega-menu-title"><span class="menu-text">HOME GROUP</span></a>
                                        <ul>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-9.webp') ?>" alt="home-9"> <a href="index-10.html"><span class="menu-text">Reblended Dish</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-10.webp') ?>" alt="home-10"> <a href="index-11.html"><span class="menu-text">Craftin House</span></a></li>
                                            <li> <img class="mmh_img " src="<?= urlOf('assets/images/demo/menu/home-11.webp') ?>" alt="home-11"> <a href="index-12.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-banner"><img src="<?= urlOf('assets/images/banner/menu-banner-1.webp') ?>" alt="Home Menu Banner"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Shop</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">SHOP PAGES</span></a>
                                        <ul>
                                            <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                            <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                            <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                            <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                            <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT PAGES</span></a>
                                        <ul>
                                            <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                            <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                            <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                            <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                            <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                            <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                            <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                            <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                        <ul>
                                            <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                            <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                            <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                            <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                            <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                            <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                            <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                            <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="align-self-center">
                                        <a href="#" class="menu-banner"><img src="assets/images/banner/menu-banner-2.webp" alt="Shop Menu Banner"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Project</span></a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                    <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                    <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                    <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Elements</span></a>
                                <ul class="sub-menu mega-menu">
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                        <ul>
                                            <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                            <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                            <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                        <ul>
                                            <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                            <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                            <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                        <ul>
                                            <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                            <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                            <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                        <ul>
                                            <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                            <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                            <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Blog</span></a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="blog-right-sidebar.html"><span class="menu-text">Standard Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-grid-right-sidebar.html"><span class="menu-text">Grid Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-list-right-sidebar.html"><span class="menu-text">List Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Masonry Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="blog-details-right-sidebar.html"><span class="menu-text">Single Post Layout</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                            <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                            <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                                    <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                                    <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                                    <li><a href="coming-soon.html"><span class="menu-text">Coming Soon</span></a></li>
                                    <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Search End -->

                <!-- Search Start -->
                <div class="col-auto d-none d-xl-block">
                    <div class="header2-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button class="btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Search End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block d-xl-none">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>

    </div>
    <!-- Header Section End -->
    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index-2.html"><img src="<?= urlOf('assets/images/logo/logo-2.webp') ?>" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->

    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-white section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index-2.html"><img src="<?= urlOf('assets/images/logo/logo-2.webp') ?>" alt="Learts Logo"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login d-none d-sm-block">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-search d-none d-sm-block">
                            <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Search Start -->
    <div id="offcanvas-search" class="offcanvas offcanvas-search">
        <div class="inner">
            <div class="offcanvas-search-form">
                <button class="offcanvas-close">x</button>
                <form action="#">
                    <div class="row mb-n3">
                        <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="Search Products..."></div>
                        <div class="col-lg-4 col-12 mb-3">
                            <select class="search-select select2-basic">
                                <option value="0">All Categories</option>
                                <option value="kids-babies">Kids &amp; Babies</option>
                                <option value="home-decor">Home Decor</option>
                                <option value="gift-ideas">Gift ideas</option>
                                <option value="kitchen">Kitchen</option>
                                <option value="toys">Toys</option>
                                <option value="kniting-sewing">Kniting &amp; Sewing</option>
                                <option value="pots">Pots</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <p class="search-description text-body-light mt-2"> <span># Type at least 1 character to search</span> <span># Hit enter to search or ESC to close</span></p>

        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">x</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-1.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">x</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-2.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">x</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-3.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">x</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">x</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-1.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-2.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-details.html" class="image"><img src="<?= urlOf('assets/images/product/cart-product-3.webp') ?>" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="product-details.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="shopping-cart.html" class="btn btn-dark btn-hover-primary">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <div class="inner customScroll">
                <div class="offcanvas-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="offcanvas-menu">
                    <ul>
                        <li><a href="#"><span class="menu-text">Home</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Home Group</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html"><span class="menu-text">Arts Propelled</span></a></li>
                                        <li><a href="index-3.html"><span class="menu-text">Decor Thriving</span></a></li>
                                        <li><a href="index-4.html"><span class="menu-text">Savvy Delight</span></a></li>
                                        <li><a href="index-5.html"><span class="menu-text">Perfect Escapes</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Home Group</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="index-6.html"><span class="menu-text">Kitchen Cozy</span></a></li>
                                        <li><a href="index-7.html"><span class="menu-text">Dreamy Designs</span></a></li>
                                        <li><a href="index-8.html"><span class="menu-text">Crispy Recipes</span></a></li>
                                        <li><a href="index-9.html"><span class="menu-text">Decoholic Chic</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Home Group</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="index-10.html"><span class="menu-text">Reblended Dish</span></a></li>
                                        <li><a href="index-11.html"><span class="menu-text">Craftin House</span></a></li>
                                        <li><a href="index-12.html"><span class="menu-text">Craftswork Biz</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#"><span class="menu-text">Shop Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html"><span class="menu-text">Shop No Sidebar</span></a></li>
                                        <li><a href="shop-left-sidebar.html"><span class="menu-text">Shop Left Sidebar</span></a></li>
                                        <li><a href="shop-right-sidebar.html"><span class="menu-text">Shop Right Sidebar</span></a></li>
                                        <li><a href="shop-fullwidth-no-gutters.html"><span class="menu-text">Shop Fullwidth No Space</span></a></li>
                                        <li><a href="shop-fullwidth.html"><span class="menu-text">Shop Fullwidth No Sidebar</span></a></li>
                                        <li><a href="shop-fullwidth-left-sidebar.html"><span class="menu-text">Shop Fullwidth Left Sidebar</span></a></li>
                                        <li><a href="shop-fullwidth-right-sidebar.html"><span class="menu-text">Shop Fullwidth Right Sidebar</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><span class="menu-text">Product Pages</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="product-details.html"><span class="menu-text">Basic</span></a></li>
                                        <li><a href="product-details-fullwidth.html"><span class="menu-text">Fullwidth</span></a></li>
                                        <li><a href="product-details-sticky.html"><span class="menu-text">Sticky Details</span></a></li>
                                        <li><a href="product-details-sidebar.html"><span class="menu-text">Width Sidebar</span></a></li>
                                        <li><a href="product-details-extra-content.html"><span class="menu-text">Extra Content</span></a></li>
                                        <li><a href="product-details-image-variation.html"><span class="menu-text">Variations Images</span></a></li>
                                        <li><a href="product-details-group.html"><span class="menu-text">Bought Together</span></a></li>
                                        <li><a href="product-details-360.html"><span class="menu-text">Product 360</span></a></li>
                                        <li><a href="product-details-background.html"><span class="menu-text">Product with Background</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">PRODUCT & Other PAGES</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                                        <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                                        <li><a href="order-tracking.html"><span class="menu-text">Order Tracking</span></a></li>
                                        <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                                        <li><a href="login-register.html"><span class="menu-text">Customer Login</span></a></li>
                                        <li><a href="my-account.html"><span class="menu-text">My Account</span></a></li>
                                        <li><a href="lost-password.html"><span class="menu-text">Lost Password</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Project</span></a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-3-columns.html"><span class="menu-text">Portfolio 3 Columns</span></a></li>
                                <li><a href="portfolio-4-columns.html"><span class="menu-text">Portfolio 4 Columns</span></a></li>
                                <li><a href="portfolio-5-columns.html"><span class="menu-text">Portfolio 5 Columns</span></a></li>
                                <li><a href="portfolio-details.html"><span class="menu-text">Portfolio Details</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Elements</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">Column One</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="elements-products.html"><span class="menu-text">Product Styles</span></a></li>
                                        <li><a href="elements-products-tabs.html"><span class="menu-text">Product Tabs</span></a></li>
                                        <li><a href="elements-product-sale-banner.html"><span class="menu-text">Product & Sale Banner</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">Column Two</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="elements-category-banner.html"><span class="menu-text">Category Banner</span></a></li>
                                        <li><a href="elements-team.html"><span class="menu-text">Team Member</span></a></li>
                                        <li><a href="elements-testimonials.html"><span class="menu-text">Testimonials</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">Column Three</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="elements-instagram.html"><span class="menu-text">Instagram</span></a></li>
                                        <li><a href="elements-map.html"><span class="menu-text">Google Map</span></a></li>
                                        <li><a href="elements-icon-box.html"><span class="menu-text">Icon Box</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="mega-menu-title"><span class="menu-text">Column Four</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="elements-buttons.html"><span class="menu-text">Buttons</span></a></li>
                                        <li><a href="elements-faq.html"><span class="menu-text">FAQs / Toggles</span></a></li>
                                        <li><a href="elements-brands.html"><span class="menu-text">Brands</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog</span></a>
                            <ul class="sub-menu">
                                <li><a href="#"><span class="menu-text">Standard Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                        <li><a href="blog-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                        <li><a href="blog-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="menu-text">Grid Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                        <li><a href="blog-grid-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                        <li><a href="blog-grid-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="menu-text">List Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                        <li><a href="blog-list-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                        <li><a href="blog-list-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="menu-text">Masonry Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-masonry-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                        <li><a href="blog-masonry-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                        <li><a href="blog-masonry-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span class="menu-text">Single Post Layout</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-details-right-sidebar.html"><span class="menu-text">Right Sidebar</span></a></li>
                                        <li><a href="blog-details-left-sidebar.html"><span class="menu-text">Left Sidebar</span></a></li>
                                        <li><a href="blog-details-fullwidth.html"><span class="menu-text">Full Width</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html"><span class="menu-text">About us</span></a></li>
                                <li><a href="about-us-2.html"><span class="menu-text">About us 02</span></a></li>
                                <li><a href="contact-us.html"><span class="menu-text">Contact us</span></a></li>
                                <li><a href="404.html"><span class="menu-text">Page 404</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas-buttons">
                    <div class="header-tools">
                        <div class="header-login">
                            <a href="my-account.html"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="wishlist.html"><span>3</span><i class="far fa-heart"></i></a>
                        </div>
                        <div class="header-cart">
                            <a href="shopping-cart.html"><span class="cart-count">3</span><i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>

    <!-- Slider main container Start -->
    <div class="home2-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#EEE5DD">
                <div class="home2-slide1-image">
                    <img src="<?= urlOf('assets/images/slider/home2/slider-1-1.webp') ?>" alt="Slide One Image">

                    <div class="home2-slide1-product1">
                        <button class="slide-pointer"><span>+</span></button>
                        <div class="slide-product">
                            <div class="image"><img src="<?= urlOf('assets/images/slider/home2/slider-1-2.webp') ?>" alt="Slide Product Image"></div>
                            <h6 class="title">Country Feast set </h6>
                            <span class="price">$39.00</span>
                        </div>
                    </div>

                </div>
                <div class="home2-slide-content">
                    <h5 class="sub-title">DAILY OFFER</h5>
                    <h2 class="title">Country Feast Set</h2>
                    <div class="link"><a href="shop.html">shop collection</a></div>
                </div>
                <div class="home2-slide-pages">
                    <span class="current">1</span>
                    <span class="border"></span>
                    <span class="total">3</span>
                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#F5F1F1">
                <div class="home2-slide2-image">
                    <img src="assets/images/slider/home2/slider-2-1.webp" alt="Slide One Image">

                    <div class="home2-slide2-product1">
                        <button class="slide-pointer"><span>+</span></button>
                        <div class="slide-product">
                            <div class="image"><img src="<?= urlOf('assets/images/slider/home2/slider-2-2.webp') ?>" alt="Slide Product Image"></div>
                            <h6 class="title">Country Feast set </h6>
                            <span class="price">$39.00</span>
                        </div>
                    </div>
                    <div class="home2-slide2-product2">
                        <button class="slide-pointer"><span>+</span></button>
                        <div class="slide-product">
                            <div class="image"><img src="<?= urlOf('assets/images/slider/home2/slider-2-3.webp') ?>" alt="Slide Product Image"></div>
                            <h6 class="title">Country Feast set </h6>
                            <span class="price">$39.00</span>
                        </div>
                    </div>

                </div>
                <div class="home2-slide-content">
                    <h5 class="sub-title">DAILY OFFER</h5>
                    <h2 class="title">DESIGNS FOR YOU</h2>
                    <div class="link"><a href="shop.html">shop collection</a></div>
                </div>
                <div class="home2-slide-pages">
                    <span class="current">2</span>
                    <span class="border"></span>
                    <span class="total">3</span>
                </div>
            </div>
            <div class="home2-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-color="#F1DED0">
                <div class="home2-slide3-image">
                    <img src="assets/images/slider/home2/slider-3-1.webp" alt="Slide One Image">

                    <div class="home2-slide3-product1">
                        <button class="slide-pointer"><span>+</span></button>
                        <div class="slide-product">
                            <div class="image"><img src="<?= urlOf('assets/images/slider/home2/slider-3-2.webp') ?>" alt="Slide Product Image"></div>
                            <h6 class="title">Country Feast set </h6>
                            <span class="price">$39.00</span>
                        </div>
                    </div>
                    <div class="home2-slide3-product2">
                        <button class="slide-pointer"><span>+</span></button>
                        <div class="slide-product">
                            <div class="image"><img src="<?= urlOf('assets/images/slider/home2/slider-3-3.webp') ?>" alt="Slide Product Image"></div>
                            <h6 class="title">Country Feast set </h6>
                            <span class="price">$39.00</span>
                        </div>
                    </div>

                </div>
                <div class="home2-slide-content">
                    <h5 class="sub-title">DAILY OFFER</h5>
                    <h2 class="title">Country Feast Set</h2>
                    <div class="link"><a href="shop.html">shop collection</a></div>
                </div>
                <div class="home2-slide-pages">
                    <span class="current">3</span>
                    <span class="border"></span>
                    <span class="total">3</span>
                </div>
            </div>
        </div>
        <div class="home2-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
        <div class="home2-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
    </div>
    <!-- Slider main container End -->

    <!-- Sale Banner Section Start -->
    <div class="section section-padding" data-bg-image="assets/images/bg/home-2.webp">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-lg-5 col-12 ms-auto align-self-center learts-mb-30">
                    <div class="about-us">
                        <div class="inner">
                            <img class="logo " src="<?= urlOf('assets/images/logo/logo-3.webp') ?>" alt="Site Logo">
                            <h2 class="title">Making & crafting</h2>
                            <span class="special-title">Handicraft shop</span>
                            <p>Crafting beautiful stuff with our own hands and the help from useful tools is a wonderful process, where you can enjoy yourself while pulling out some ideas and busy perfecting your work.</p>
                            <a href="#" class="link">Online Store</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                    <div class="category-banner2">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="<?= urlOf('assets/images/banner/category/banner-s2-1.webp') ?>" alt=""></div>
                            <div class="content">
                                <h3 class="title">Toys<span class="number">6 items</span></h3>
                            </div>
                        </a>
                        <span class="banner-desc right">NEW COLLECTION</span>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 learts-mb-30">
                    <div class="category-banner2">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="<?= urlOf('assets/images/banner/category/banner-s2-2.webp') ?>" alt=""></div>
                            <div class="content">
                                <h3 class="title">Kniting & Sewing<span class="number">4 items</span></h3>
                            </div>
                        </a>
                        <span class="banner-desc right">SALE UP TO 40%</span>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                    <div class="section-padding pb-0 d-none d-lg-block"></div>
                    <div class="category-banner2">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="<?= urlOf('assets/images/banner/category/banner-s2-3.webp') ?>" alt=""></div>
                            <div class="content">
                                <h3 class="title">Gift ideas<span class="number">16 items</span></h3>
                            </div>
                        </a>
                        <span class="banner-desc right">BEST SELLERS</span>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 ms-auto learts-mb-30">
                    <div class="section learts-pt-40 d-none d-lg-block"></div>
                    <div class="category-banner2">
                        <a href="shop.html" class="inner">
                            <div class="image"><img src="<?= urlOf('assets/images/banner/category/banner-s2-4.webp') ?>" alt=""></div>
                            <div class="content">
                                <h3 class="title">Home Decor<span class="number">16 items</span></h3>
                            </div>
                        </a>
                        <span class="banner-desc left">BEST SELLERS</span>
                    </div>
                </div>

                <div class="d-flex align-items-center col-lg-5 col-12 ms-auto learts-mb-30">
                    <div class="sale-banner3">
                        <span class="special-title">Spring sale</span>
                        <h2 class="title" data-text="ss = 18">Sale up to 10% all</h2>
                        <a href="#" class="link">ONLINE STORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Sale Banner Section End -->

    <!-- Gallery Section Start -->
    <div class="section section-padding border-top">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h3 class="sub-title">Follow us on Instagram</h3>
                <h2 class="title">@learts_shop</h2>
            </div>
            <!-- Section Title End -->

            <div class="instafeed instafeed-carousel instafeed-carousel1">
                <a class="instafeed-item" href="#">
                    <img src="<?= urlOf('assets/images/instagram/instagram-1.webp') ?>" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="<?= urlOf('assets/images/instagram/instagram-2.webp') ?>" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="<?= urlOf('assets/images/instagram/instagram-3.webp') ?>" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="<?= urlOf('assets/images/instagram/instagram-4.webp') ?>" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="<?= urlOf('assets/images/instagram/instagram-4.webp') ?>" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <div class="footer2-section section section-padding">
        <div class="container">
            <div class="row learts-mb-n40">

                <div class="col-lg-6 learts-mb-40">
                    <div class="widget-about">
                        <img src="assets/images/logo/logo-2.webp" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod itaque recusandae commodi mollitia facere iure nisi, laudantium quis quas perferendis a minus dolores.</p>
                    </div>
                </div>

                <div class="col-lg-4 learts-mb-40">
                    <div class="row">
                        <div class="col">
                            <ul class="widget-list">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Store location</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Orders</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="widget-list">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 learts-mb-40">
                    <ul class="widget-list">
                        <li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li>
                        <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
                        <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                        <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="footer2-copyright section">
        <div class="container">
            <p class="copyright text-center">&copy; 2023 learts. All Rights Reserved</p>
        </div>
    </div>
    <!-- Modal -->
    <div class="quickViewModal modal fade" id="quickViewModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="close" data-bs-dismiss="modal">&times;</button>
                <div class="row learts-mb-n30">

                    <!-- Product Images Start -->
                    <div class="col-lg-6 col-12 learts-mb-30">
                        <div class="product-images">
                            <div class="product-gallery-slider-quickview">
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.webp">
                                    <img src="<?= urlOf('assets/images/product/single/1/product-1.webp') ?>" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.webp">
                                    <img src="<?= urlOf('assets/images/product/single/1/product-2.webp') ?>" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.webp">
                                    <img src="<?= urlOf('assets/images/product/single/1/product-3.webp') ?>" alt="">
                                </div>
                                <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.webp">
                                    <img src="<?= urlOf('assets/images/product/single/1/product-4.webp') ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Images End -->

                    <!-- Product Summery Start -->
                    <div class="col-lg-6 col-12 overflow-hidden position-relative learts-mb-30">
                        <div class="product-summery customScroll">
                            <div class="product-ratings">
                                <span class="star-rating">
                                <span class="rating-active" style="width: 100%;">ratings</span>
                                </span>
                                <a href="#reviews" class="review-link">(<span class="count">3</span> customer reviews)</a>
                            </div>
                            <h3 class="product-title">Cleaning Dustpan & Brush</h3>
                            <div class="product-price">£38.00 – £50.00</div>
                            <div class="product-description">
                                <p>Easy clip-on handle – Hold the brush and dustpan together for storage; the dustpan edge is serrated to allow easy scraping off the hair without entanglement. High-quality bristles – no burr damage, no scratches, thick and durable, comfortable to remove dust and smaller particles.</p>
                            </div>
                            <div class="product-variations">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>Size</span></td>
                                            <td class="value">
                                                <div class="product-sizes">
                                                    <a href="#">Large</a>
                                                    <a href="#">Medium</a>
                                                    <a href="#">Small</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Color</span></td>
                                            <td class="value">
                                                <div class="product-colors">
                                                    <a href="#" data-bg-color="#000000"></a>
                                                    <a href="#" data-bg-color="#ffffff"></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Quantity</span></td>
                                            <td class="value">
                                                <div class="product-quantity">
                                                    <span class="qty-btn minus"><i class="ti-minus"></i></span>
                                                    <input type="text" class="input-qty" value="1">
                                                    <span class="qty-btn plus"><i class="ti-plus"></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="product-buttons">
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="far fa-heart"></i></a>
                                <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fas fa-random"></i></a>
                            </div>
                            <div class="product-brands">
                                <span class="title">Brands</span>
                                <div class="brands">
                                    <a href="#"><img src="<?= urlOf('assets/images/brands/brand-3.webp') ?>" alt=""></a>
                                    <a href="#"><img src="<?= urlOf('assets/images/brands/brand-8.webp') ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="product-meta mb-0">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="label"><span>SKU</span></td>
                                            <td class="value">0404019</td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Category</span></td>
                                            <td class="value">
                                                <ul class="product-category">
                                                    <li><a href="#">Kitchen</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Tags</span></td>
                                            <td class="value">
                                                <ul class="product-tags">
                                                    <li><a href="#">handmade</a></li>
                                                    <li><a href="#">learts</a></li>
                                                    <li><a href="#">mug</a></li>
                                                    <li><a href="#">product</a></li>
                                                    <li><a href="#">learts</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="label"><span>Share on</span></td>
                                            <td class="va">
                                                <div class="product-share">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Product Summery End -->

                </div>
            </div>
        </div>
    </div>

   

</body>
</html>

<?php
include pathOf('includes/scripts.php');
?>