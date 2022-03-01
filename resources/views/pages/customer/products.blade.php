@extends('layouts.customer_secondary')
@section('content')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Lucky Star Grocery Store Products</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Products</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area" >
                            <div class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Filter</span>
                                <a href="#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <div class="wrap-selectors">
                                    <form action="#" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Refine Products By</span>
                                        <div data-title="Price:" class="selector-item">
                                            <select name="price" class="selector">
                                                <option value="all">Price</option>
                                                <option value="class-1st">Less than Php 50</option>
                                                <option value="class-2nd">Php 50 - Php 100</option>
                                                <option value="class-3rd">Php 100 - Php 200</option>
                                                <option value="class-4th">Php 200 - Php 500</option>
                                                <option value="class-5th">More than Php 500</option>
                                            </select>
                                        </div>
                                        <div data-title="Rating:" class="selector-item">
                                            <select name="rate" class="selector">
                                                <option value="all">Rating</option>
                                                <option value="br2">5 Star</option>
                                                <option value="br3">4 Star</option>
                                                <option value="br4">3 Star</option>
                                                <option value="br5">2 Star</option>
                                                <option value="br6">1 Star</option>
                                            </select>
                                        </div>
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                    </form>
                                </div>
                            </div>
                            <div class="flt-item to-right">
                                <span class="flt-title">Sort</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default</option>
                                            <option value="popularity">popularity</option>
                                            <option value="rating">average rating</option>
                                            <option value="date">newness</option>
                                            <option value="price">price: low to high</option>
                                            <option value="price-desc">price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <ul class="products-list">
                                @foreach ($products as $product)
                                <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="/product/{{$product['id']}}" class="link-to-product">
                                                <img src="{{asset('storage/uploads/images/'.$product['image_folder'].'/'.$product['variation'].'.jpg')}}" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">{{$product['variation']}} </b>
                                            <h4 class="product-title"><a href="#" class="pr-name">{{$product['product_name']}}</a></h4>
                                            <div class="price">
                                            

                                                @if (empty($product['discounted_price']))
                                                    <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['price'], 2, '.', '')}}</span></ins>
                                                @else
                                                <ins><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['discounted_price'], 2, '.', '')}}</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">Php </span>{{number_format((float)$product['price'], 2, '.', '')}}</span></del>
                                                @endif
                                            </div>
                                          
                                            <div class="slide-down-box">
                                                <p class="message">All products are carefully selected to ensure food safety.</p>
                                                @if (Auth::check())
                                                <div class="buttons">
                                                    <a class="btn add-to-cart-btn" id="{{$product['id']}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                </div>
                                                @else
                                                <div class="buttons">
                                                    <a href="/login" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                </div>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                       

                        {{$products->links('inc.customer.pagination-links')}}

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

          $('body').on('click', '.add-to-cart-btn', function(){
              var product_id = $(this).attr('id');

              $.ajax({
                data: {product_id: product_id},
                url: "{{ route('orders.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#'+product_id).hide();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
          })
       
        });
    </script>
    
@endsection