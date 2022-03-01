<!-- FOOTER -->
    <footer id="footer" class="footer layout-01">
        <div class="footer-content background-footer-03">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <section class="footer-item">
                            <a href="home-01.html" class="logo footer-logo"><img src="{{asset('client/assets/images/logo-biolife-1.png')}}" alt="biolife logo" width="135" height="34"></a>
                            <div class="footer-phone-info mode-03">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Got Questions ?</span>
                                    <span class="number">(+63)  123 456 789</span>
                                </p>
                            </div>
                            <div class="contact-info-block footer-layout simple-info">
                                <h4 class="title">Contact info</h4>
                                <div class="info-item">
                                    <img src="{{asset('client/assets/images/location-icon.png')}}" width="22" height="26" alt="" class="icon">
                                    <p class="desc">7563 Vista Bonita, City of Dasmariñas, Cavite - 4114</p>
                                </div>
                            </div>
                            <div class="biolife-social inline circle-hover">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12 ">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
                                <section class="footer-item">
                                    <h3 class="section-title">My Account</h3>
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Sign In</a></li>
                                            <li><a href="#">View Cart</a></li>
                                            <li><a href="#">My Wishlist</a></li>
                                            <li><a href="#">Track My Order</a></li>
                                            <li><a href="#">Help</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
                                <section class="footer-item">
                                    <h3 class="section-title">Why Buy From Us</h3>
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Shipping & Returns</a></li>
                                            <li><a href="#">Secure Shopping</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="#">Group Sales</a></li>
                                            <li><a href="#">Shipping & Returns</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xs-12 md-margin-top-6px xs-margin-top-40px">
                                <section class="footer-item">
                                    <h3 class="section-title">Information</h3>
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">About Our Shop</a></li>
                                            <li><a href="#">Secure Shopping</a></li>
                                            <li><a href="#">Delivery infomation</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Our Sitemap</a></li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="copy-rights-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="copy-right-text"><p>Copyright &copy Lucky Star 2021</p></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="payment-methods">
                                <ul>
                                    <li><a href="#" class="payment-link"><img src="{{asset('client/assets/images/card1.jpg')}}" width="51" height="36" alt=""></a></li>
                                    <li><a href="#" class="payment-link"><img src="{{asset('client/assets/images/card2.jpg')}}" width="51" height="36" alt=""></a></li>
                                    <li><a href="#" class="payment-link"><img src="{{asset('client/assets/images/card3.jpg')}}" width="51" height="36" alt=""></a></li>
                                    <li><a href="#" class="payment-link"><img src="{{asset('client/assets/images/card4.jpg')}}" width="51" height="36" alt=""></a></li>
                                    <li><a href="#" class="payment-link"><img src="{{asset('client/assets/images/card5.jpg')}}" width="51" height="36" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
          
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="/orders">
                    <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="{{route('account.index')}}">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="text">Account</span>
                </a>
            </div>
        </div>
    </div>

    <!--Quickview Popup-->
    <div id="biolife-quickview-block" class="biolife-quickview-block">
        <div class="quickview-container">
            <a href="#" class="btn-close-quickview" data-object="open-quickview-block"><span class="biolife-icon icon-close-menu"></span></a>
            <div class="biolife-quickview-inner">
                <div class="media">
                    <ul class="biolife-carousel quickview-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".quickview-nav"}'>
                        <li><img src="{{asset('client/assets/images/details-product/detail_01.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_02.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_03.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_04.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_05.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_06.jpg')}}" alt="" width="500" height="500"></li>
                        <li><img src="{{asset('client/assets/images/details-product/detail_07.jpg')}}" alt="" width="500" height="500"></li>
                    </ul>
                    <ul class="biolife-carousel quickview-nav" data-slick='{"arrows":true,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":3,"slidesToScroll":1,"asNavFor":".quickview-for"}'>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_01.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_02.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_03.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_04.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_05.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_06.jpg')}}" alt="" width="88" height="88"></li>
                        <li><img src="{{asset('client/assets/images/details-product/thumb_07.jpg')}}" alt="" width="88" height="88"></li>
                    </ul>
                </div>
                <div class="product-attribute">
                    <h4 class="title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                    <div class="rating">
                        <p class="star-rating"><span class="width-80percent"></span></p>
                    </div>

                    <div class="price price-contain">
                        <ins><span class="price-amount"><span class="currencySymbol">Php </span>85.00</span></ins>
                        <del><span class="price-amount"><span class="currencySymbol">Php </span>95.00</span></del>
                    </div>
                    <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus.</p>
                    <div class="from-cart">
                        <div class="qty-input">
                            <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
                            <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                            <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn add-to-cart-btn btn-bold">add to cart</a>
                        </div>
                    </div>

                    <div class="product-meta">
                        <div class="product-atts">
                            <div class="product-atts-item">
                                <b class="meta-title">Categories:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">Milk & Cream</a></li>
                                    <li><a href="#" class="meta-link">Fresh Meat</a></li>
                                    <li><a href="#" class="meta-link">Fresh Fruit</a></li>
                                </ul>
                            </div>
                            <div class="product-atts-item">
                                <b class="meta-title">Tags:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">food theme</a></li>
                                    <li><a href="#" class="meta-link">organic food</a></li>
                                    <li><a href="#" class="meta-link">organic theme</a></li>
                                </ul>
                            </div>
                            <div class="product-atts-item">
                                <b class="meta-title">Brand:</b>
                                <ul class="meta-list">
                                    <li><a href="#" class="meta-link">Fresh Fruit</a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="sku">SKU: N/A</span>
                        <div class="biolife-social inline add-title">
                            <span class="fr-title">Share:</span>
                            <ul class="socials">
                                <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="{{asset('client/assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('client/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('client/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('client/assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('client/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('client/assets/js/biolife.framework.js')}}"></script>
    <script src="{{asset('client/assets/js/functions.js')}}"></script>

    