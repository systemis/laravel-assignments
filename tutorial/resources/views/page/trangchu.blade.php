<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
</head>

<body>
    @extends('page.master')
    @section('content')
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">{{ count($topProducts) }} products found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach ($topProducts as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="product.html">
                                                        <img src="source/image/product/{{ $product->image }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $product->name }}</p>
                                                    <p class="single-item-price">
                                                        <span>${{ $product->unit_price }}</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="product.html">Details <i
                                                            class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- .beta-products-list -->

                            <div class="space50">&nbsp;</div>

                            <div class="beta-products-list">
                                <h4>New Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left">{{ count($products) }} products found</p>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="product.html">
                                                        <img src="source/image/product/{{ $product->image }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $product->name }}</p>
                                                    <p class="single-item-price">
                                                        <span>${{ $product->unit_price }}</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="product.html">Details <i
                                                            class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->
                    <div class="row" style="margin-top: 20px;"> {{ $products->links() }}
                    </div>
                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
    @endsection
</body>
</html>
