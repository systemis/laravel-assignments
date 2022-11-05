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
                        {{-- @foreach ($slides as $slide)
                            <img src="/source/assets/dest/images/{{ $slide->image }}" alt="Slide image" />
                        @endforeach
                        @foreach ($products as $product)
                            <h2>Unit price {{ $product->unit_price }}</h2>
                        @endforeach --}}
                        {{-- <div class="col-sm-12">
                      <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                          <p class="pull-left">438 styles found</p>
                          <div class="clearfix"></div>
                        </div>

                        <div class="row">
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/1.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>

                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/2.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span class="flash-del">$34.55</span>
                                  <span class="flash-sale">$33.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> <!-- .beta-products-list -->

                      <div class="space50">&nbsp;</div>

                      <div class="beta-products-list">
                        <h4>Top Products</h4>
                        <div class="beta-products-details">
                          <p class="pull-left">438 styles found</p>
                          <div class="clearfix"></div>
                        </div>
                        <div class="row">
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/1.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>

                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/2.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span class="flash-del">$34.55</span>
                                  <span class="flash-sale">$33.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="space40">&nbsp;</div>
                        <div class="row">
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/1.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>

                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/2.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span class="flash-del">$34.55</span>
                                  <span class="flash-sale">$33.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="single-item">
                              <div class="single-item-header">
                                <a href="product.html"><img src="/source/assets/dest/images/products/3.jpg" alt=""></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">Sample Woman Top</p>
                                <p class="single-item-price">
                                  <span>$34.55</span>
                                </p>
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> <!-- .beta-products-list -->
                    </div> --}}
                    </div> <!-- end section with sidebar and main content -->
                    <div class="row">
                        @foreach ($products as $product)
                          <div class="col-lg-4 col-md-6">
                            <div class="card d-flex flex-column align-items-center">
                                <div class="product-name">{{ $product -> name }}</div>
                                <div class="card-img"> <img
                                        src="/source/image/product/{{ $product->image }}"
                                        alt=""> </div>
                                <div class="card-body pt-5">
                                    <div class="text-muted text-center mt-auto">Description {{ $product -> description }}</div>
                                    <div class="d-flex align-items-center justify-content-center colors my-2">
                                        <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                            data-placement="right" title="" data-original-title="choose color"> <label
                                                class="btn btn-red form-check-label"> <input class="form-check-input"
                                                    type="radio" autocomplete="off"> </label> <label
                                                class="btn btn-blue form-check-label active"> <input
                                                    class="form-check-input" type="radio" autocomplete="off"> </label>
                                            <label class="btn btn-green form-check-label"> <input class="form-check-input"
                                                    type="radio" autocomplete="off"> </label> <label
                                                class="btn btn-orange form-check-label"> <input class="form-check-input"
                                                    type="radio" autocomplete="off"> </label> <label
                                                class="btn btn-pink form-check-label"> <input class="form-check-input"
                                                    type="radio" autocomplete="off"> </label> </div>
                                    </div>
                                    <div class="d-flex align-items-center price">
                                        {{-- <div class="del mr-2"><span class="text-dark">5500 uah</span></div> --}}
                                        <div class="font-weight-bold">{{ $product -> unit_price }} {{ $product -> unit }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        @endforeach
                    </div>
                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div>
    @endsection
</body>

</html>
