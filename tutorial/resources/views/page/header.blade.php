<!doctype html>
<html lang="en">
<body>
  <div id="header">
    <div class="header-top">
      <div class="container">
        <div class="pull-left auto-width-left">
          <ul class="top-menu menu-beta l-inline">
            <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
            <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
          </ul>
        </div>
        <div class="pull-right auto-width-right">
          <ul class="top-details menu-beta l-inline">
            <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
            <li><a href="#">Đăng kí</a></li>
            <li><a href="#">Đăng nhập</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
      </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
      <div class="container beta-relative">
        <div class="pull-left">
          <a href="/" id="logo"><img src="/source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
        </div>
        <div class="pull-right beta-components space-left ov">
          <div class="space10">&nbsp;</div>
          <div class="beta-comp">
            <form role="search" method="get" id="searchform" action="/">
              <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
              <button class="fa fa-search" type="submit" id="searchsubmit"></button>
            </form>
          </div>

          <div class="beta-comp">
            @if(Session::has('cart'))
            <div class="cart">
              <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng {{$totalQty}} <i
                  class="fa fa-chevron-down"></i></div>
              <div class="beta-dropdown cart-body">
                @foreach ($productCart as $product)
                <div class="cart-item">
                    <div class="media">
                      <a class="pull-left" href="/product/{{$product['item']['id']}}"><img src="source/image/product/{{ $product['item']['image'] }}" alt=""></a>
                      <div class="media-body">
                        <span class="cart-item-title">{{$product['item']['name']}}</span>
                        <span class="cart-item-options">Size: XS; Colar: Navy</span>
                        <span class="cart-item-amount">{{$product['item']['qty']}}*<span>{{$product['item']['unit_price']}}</span></span>
                      </div>
                    </div>
                  </div>    
                @endforeach

                <div class="cart-caption">
                  <div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">${{ $totalPrice }}</span></div>
                  <div class="clearfix"></div>

                  <div class="center">
                    <div class="space10">&nbsp;</div>
                    <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i
                        class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div> <!-- .cart -->
            @endif
          </div>
        </div>
        <div class="clearfix"></div>
      </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
      <div class="container">
        <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i
            class="fa fa-bars"></i></a>
        <div class="visible-xs clearfix"></div>
        <nav class="main-menu">
          <ul class="l-inline ov">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a>
              <ul class="sub-menu">
                @foreach ($productTypes as $type)
                  <li><a href="/type/{{ $type -> id }}">{{ $type -> name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="about.html">Giới thiệu</a></li>
            <li><a href="contacts.html">Liên hệ</a></li>
          </ul>
          <div class="clearfix"></div>
        </nav>
      </div> <!-- .container -->
    </div> <!-- .header-bottom -->
  </div>
  <div class="rev-slider">
    <div class="fullwidthbanner-container">
      <div class="fullwidthbanner">
        <div class="bannercontainer">
          <div class="banner">
            <ul>
              <!-- THE FIRST SLIDE -->
              <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                  data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                  data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                  data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                  data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                  <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                    src="/source/assets/dest/images/thumbs/1.jpg" data-src="/source/assets/dest/images/thumbs/1.jpg"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                  </div>
                </div>

              </li>
              <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                  data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                  data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                  data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                  data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                  <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                    src="/source/assets/dest/images/thumbs/1.jpg" data-src="/source/assets/dest/images/thumbs/1.jpg"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                  </div>
                </div>

              <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                  data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                  data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                  data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                  data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                  <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                    src="/source/assets/dest/images/thumbs/1.jpg" data-src="/source/assets/dest/images/thumbs/1.jpg"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                  </div>
                </div>

              </li>

              <li data-transition="boxfade" data-slotamount="20" class="active-revslide current-sr-slide-visible"
                style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                  data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                  data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                  data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                  data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                  <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                    src="/source/assets/dest/images/thumbs/1.jpg" data-src="/source/assets/dest/images/thumbs/1.jpg"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                  </div>
                </div>

              </li>
            </ul>
          </div>
        </div>

        <div class="tp-bannertimer"></div>
      </div>
    </div>
    <!--slider-->
  </div>
</body>