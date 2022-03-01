@extends('layouts.customer_secondary')
@section('content')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">{{$product_category['category']}} Products</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="/products" class="permal-link">Products</a></li>
                <li class="nav-item"><span class="current-page">{{$product['product_name']}}</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{asset('storage/uploads/images/'.$product['image_folder'].'/'.$product['variation'].'.jpg')}}" alt="" width="300" height="300"></li>
                        </ul>
                        {{-- <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_01.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_02.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_03.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_04.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_05.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_06.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('client/assets/images/details-product/thumb_07.jpg')}}" alt="" width="88" height="88"></li>
                        </ul> --}}
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">{{$product['product_name'].' '.$product['variation']}}</h3>
                        <p class="excerpt"><b>Description: </b>{{$product['description']}}</p>
                        <div class="price">
                            @if (empty($product['discounted_price']))
                            <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['price'], 2, '.', '')}}</span></ins>
                            @else
                            <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['discounted_price'], 2, '.', '')}}</span></ins>
                            <del><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['price'], 2, '.', '')}}</span></del>
                            @endif
                            
                            
                        </div>
                        <div class="product-atts">
                            <div class="atts-item">
                                <span class="title">Variation:</span>
                                <ul class="color-list">
                                    @foreach ($similar_product as $item)
                                    <li class="color-item"><a href="/product/{{$item['id']}}" class="c-link">{{$item['variation']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">Quantity:</span>
                            <div class="qty-input">
                                <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="total-price-contain">
                            <span class="title">Total Price:</span>
                            <p class="price">Php <span id='total_price'>@if (empty($product['discounted_price']))
                                {{number_format((float)$product['price'], 2, '.', '')}}
                            @else
                            {{number_format((float)$product['discounted_price'], 2, '.', '')}}
                            @endif</span></p>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn add-to-cart-btn">add to cart</a>
                        </div>
                    
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                            {{-- <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li> --}}
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">{!!$product['description']!!}</p>
                        </div>
                      
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <div class="accodition-tab biolife-accodition">
                                <ul class="tabs">
                                    <li class="tab-item">
                                        <span class="title btn-expand">How long will it take to receive my order?</span>
                                        <div class="content">
                                            <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                            <div class="desc-expand">
                                                <span class="title">Shipping mode</span>
                                                <ul class="list">
                                                    <li>Standard (in transit 3-5 business days)</li>
                                                    <li>Priority (in transit 2-3 business days)</li>
                                                    <li>Express (in transit 1-2 business days)</li>
                                                    <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">How is the shipping cost calculated?</span>
                                        <div class="content">
                                            <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                            <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Shipping Restrictions?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Undeliverable Packages?</span>
                                        <div class="content">
                                            <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection