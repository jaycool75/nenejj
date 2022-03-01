@extends('layouts.customer_secondary')
@section('content')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Checkout</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="/home" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="/cart" class="permal-link">Shopping Cart</a></li>
                <li class="nav-item"><span class="current-page">Checkout</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain checkout">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container sm-margin-top-37px">
                <div class="row">
                    <form action="{{route('orders.confirm')}}" name="frm-checkout" method="post" id="frm-checkout">
                        @csrf
                    <!--checkout progress box-->
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="checkout-progress-wrap">
                            <ul class="steps">
                                <li class="step 1st">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">1</span>Customer</h3>
                                        <div class="box-content">
                                            <p class="txt-desc">Please double check your personal information for delivery confirmation.</p>
                                            <div class="login-on-checkout">
                                                    <p class="form-row">
                                                        <label for="input_email" class="checkout_form_label">Customer Name: </label>
                                                        <input type="text" name="name" value="{{Auth::user()->display_name}}" disabled>
                                                    </p>
                                                    <p class="form-row">
                                                        <label for="input_email" class="checkout_form_label">Contact Number: </label>
                                                        <input type="text" name="name" value="{{Auth::user()->mobile}}" disabled>
                                                    </p>
                                                    <p class="msg">Incorrect Information? <a href="/account" class="link-forward">Update Personal Information Here</a></p>
                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="step 2nd">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">2</span>Shipping Address</h3>
                                        <div class="box-content">
                                            <p class="txt-desc">Select delivery address</p>
                                            <div class="login-on-checkout">
                                                    <p class="form-row">
                                                        <input type="radio" name="delivery_address" value="pick_up" id="pick_up">
                                                        <label for="pick_up" class="checkout_form_label"><b>Pick Up on Store Location</b></label>
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="radio" name="delivery_address" value="home_address" id="home_address" {{Auth::user()->home_address != null ? '' : 'disabled'}}>
                                                        <label for="home_address" class="checkout_form_label"><b>Home Address: </b> {{Auth::user()->home_address}}</label>
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="radio" name="delivery_address" value="alternate_address" id="alternate_address" {{Auth::user()->alternate_address != null ? '' : 'disabled'}}>
                                                        <label for="alternate_address" class="checkout_form_label"><b>Alternate Address: </b> {{Auth::user()->alternate_address}}</label>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="step 3rd">
                                    <div class="checkout-act">
                                        <h3 class="title-box"><span class="number">3</span>Mode of Payment</h3>
                                       
                                        <div class="box-content">
                                            <p class="txt-desc">Select mode of payment</p>
                                            <div class="login-on-checkout">
                                                <p class="form-row">
                                                    <input type="radio" name="mode_of_payment" value="cod" id="cod">
                                                    <label for="cod" class="checkout_form_label">Cash on Delivery / Pay Upon Pick Up</label>
                                                </p>
                                                <p class="form-row">
                                                    <input type="radio" name="mode_of_payment" value="bdo" disabled id="bdo">
                                                    <label for="bdo" class="checkout_form_label disabled">BDO (Banco de Oro)</label>
                                                </p>
                                                <p class="form-row">
                                                    <input type="radio" name="mode_of_payment" value="gcash" disabled id="gcash">
                                                    <label for="g" class="checkout_form_label disabled">GCash</label>
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--Order Summary-->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                        <div class="order-summary sm-margin-bottom-80px">
                            <div class="title-block">
                                <h3 class="title">Order Summary</h3>
                                <a href="/orders" class="link-forward">Edit cart</a>
                            </div>
                            <div class="cart-list-box short-type">
                                <ul class="cart-list">

                                    @foreach ($cart as $item)
                                    <li class="cart-elem">
                                        <div class="cart-item">
                                            <div class="product-thumb">
                                                <a class="prd-thumb" href="#">
                                                    <figure><img src="{{asset('storage/uploads/images/'.$item->product->image_folder.'/'.$item->product->variation.'.jpg')}}" width="113" height="113" alt="shop-cart" ></figure>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <span class="txt-quantity">{{$item->quantity}}X</span>
                                                <a href="#" class="pr-name">{{$item->product->product_name}} {{$item->product->variation}}</a>
                                            </div>
                                            <div class="price price-contain">
                                                @if (empty($item->product->discounted_price))
                                                <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$item->product->price*$item->quantity, 2, '.', '')}}</span></ins>
                                                @else
                                                <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$item->product->discounted_price*$item->quantity, 2, '.', '')}}</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$item->product->price*$item->quantity, 2, '.', '')}}</span></del>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Subtotal</b>
                                            <span class="stt-price">Php {{number_format((float)$total_cost, 2, '.', '')}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Shipping</b>
                                            <span class="stt-price">Php 50.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">total:</b>
                                            <span class="stt-price">Php {{number_format((float)$total_cost+$shipping_fee, 2, '.', '')}}</span>
                                        </div>
                                    </li>
                                        <div class="shpcart-subtotal-block proceed">
                                            <div class="btn-checkout">
                                                <a href="javascript:{}" onclick="document.getElementById('frm-checkout').submit();" type="submit" class="btn checkout">Proceed</a>
                                            </div>
                                        </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection