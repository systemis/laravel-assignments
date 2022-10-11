<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

  <title>Shopee App</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    body {
      background-color: #e1e1e1;
    }

    .header {
      background: linear-gradient(-180deg, #f53d2d, #f63);
      height: 140px;
      width: 100%;
      /* position: fixed; */
      color: #ffffff;
      padding-top: 10px;
      z-index: 999;
    }

    .container {
      max-width: 1200px;
      padding: 0;
    }

    .navbar {
      padding: 0;
    }

    .navbar span {
      font-size: 14px;
    }

    .icon-media {
      width: 17px;
      height: 17px;
    }

    .hr1 {
      width: 2px;
      height: 15px;
      background-color: #ffffff;
    }

    .wrap-search {
      position: relative;
      width: 100%;
      height: 40px;
      background-color: #ffffff;
      border-radius: 6px;
    }

    .wrap-icon-s {
      position: absolute;
      background: linear-gradient(-180deg, #f53d2d, #f63);
      border-radius: 3px;
      width: 60px;
      height: 87%;
      right: 4px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-control {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      top: 0;
      border: none;
      background-color: transparent;
    }

    .form-control:focus {
      box-shadow: none;
      border-radius: 6px;
    }

    .icon-shop {
      width: 50px;
      height: 50px;
      margin-left: 40px;
    }

    .brand-img {
      width: 45px;
      margin-top: -2rem;
      height: 55px;
    }

    .text-brand {
      font-size: 30px;
      margin-top: -2rem;
      font-weight: 400;
    }

    .under-input span {
      font-size: 12px;
      font-weight: 100;
    }

    .wrap-navbar-input {
      margin-left: 50px;
      width: 67%;
    }


    /* jenis sale */

    .jenis-sale {
      padding: 20px;
      background-color: #ffffff;
      margin-top: 60px;
    }

    .jenis-sale p {
      font-size: 14px;
    }

    .wrap-img {
      border-radius: 12px;
      width: 50px;
      height: 50px;
      position: relative;
      border: 1px solid #888;
      padding: 5px;
    }

    .wrap-img img {
      width: 100%;
      height: 100%;
    }

    /* KATEGORY */
    .kategory {
      display: flex;
      flex-direction: column;
      background-color: #ffffff;
    }

    .kategory h5 {
      color: #8e8e8e;
      font-weight: 500;
    }

    .kategory p {
      font-size: 14px;
    }

    .card-kategory {
      padding: 10px 5px;
      width: 10%;
      height: 140px;
      border: 1px solid #c2c2c2;
    }

    .card-kategory .wrap-img {
      width: 50px;
      height: 50px;
      background-color: #dbdbdb;
      border-radius: 20px;
      border: none;
    }

    /* sale */
    .sale {
      background-color: #ffffff;
      /* padding: 13px; */
      flex-direction: column;
      padding-bottom: 20px;
    }

    .sale h5 {
      color: #f53d2d;
    }

    .sale span {
      background-color: black;
      color: #fff;
      font-weight: bold;
      padding: 0 5px;
    }

    .sale .diskon span {
      background-color: transparent;
    }

    .diskon {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: absolute;
      right: 0;
      top: 0;
      background-color: rgba(255, 212, 36, 0.9);
      width: 60px;
      height: 60px;
    }

    .total {
      position: absolute;
      bottom: 0;
      height: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .text span {
      background-color: #ffffff;
      color: #f53d2d;
      font-size: 20px;
      padding: 0;
      font-weight: 400;
    }

    .text span:first-child {
      font-size: 14px;
      font-weight: 400;
    }

    .progresss {
      left: 0;
      width: 90%;
      border-radius: 12px;
      background-color: #ff000057;
      display: flex;
      height: 20px;
      position: relative;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .progress-on {
      background-color: red;
      position: absolute;
      left: 0;
      top: 0;
      width: 75%;
      z-index: 6;
      height: 100%;
    }

    .progresss span {
      background-color: transparent;
      color: #ffffff;
      font-size: 12px;
      position: relative;
      z-index: 7;
      font-weight: 100;
    }

    .row-card {
      height: 250px;
      border-top: 1px solid #9b9b9b7a;
    }

    .wrap-img-sale {
      height: 70%;
      width: 80%;
      position: relative;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="container">
      <!-- navbar  -->
      <div class="navbar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <span>Kênh người bán</span>
          <div class="hr1 mx-2"></div>
          <span>Trở thành người bán shopee</span>
          <div class="hr1 mx-2"></div>
          <span>Tải ứng dụng</span>
          <div class="hr1 mx-2"></div>
          <span>Kết nối</span>
          <img class="icon-media mr-2 ml-2" src="/assets/facebook.png" alt="" />
          <img class="icon-media mr-2" src="/assets/instagram.png" alt="" />

        </div>
        <div class="d-flex align-items-center">
          <img class="icon-media mr-2" src="/assets/notif.png" alt="" />
          <span class="mr-4">Thông báo</span>
          <img class="icon-media mr-2" src="/assets/bantuan.png" alt="" />
          <span class="mr-4">Hỗ trợ</span>
          <span class="font-weight">Đăng ký</span>
          <div class="hr1 mx-2"></div>
          <span class="font-weight">Đăng nhập</span>
        </div>
      </div>
      <!-- input search brand -->
      <div class="d-flex align-items-center mt-4">
        <div class="d-flex align-items-center">
          <img class="brand-img mr-2" src="/assets/brand.png" alt="" />
          <span class="text-brand">Shopee</span>
        </div>
        <div class="wrap-navbar-input">
          <div class="wrap-search">
            <input type="text" class="form-control" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!" />
            <div class="wrap-icon-s">
              <img class="icon-media" src="/assets/search.png" alt="" />
            </div>
          </div>
          <div class="under-input d-flex mt-3">
            <span>Áo khoác</span>
            <span class="mr-3">Dép</span>
            <span class="mr-3">Túi Xách Nữ</span>
            <span class="mr-3">Áo Croptop</span>
            <span class="mr-3">Ốp Iphone</span>
            <span class="mr-3">Váy</span>
            <span class="mr-3">Tai nghe Bluetooth</span>
            <span class="mr-3">Bánh Tráng Phơi Sương</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <!-- kategory -->
      <div class="row mx-0 mt-0 kategory">
        <h5 class="p-4">DANH MỤC</h5>
        <div class="d-flex">
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-400 h-100 " src="/assets/áo-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thời trang nam</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/iphone-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Điện thoại &</p>
            <p class="mb-0 text-center">Phụ kiện</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/tv-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thiết Bị Điện Tử</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/laptop-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Máy Tính &</p>
            <p class="mb-0 text-center">Laptop</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/camera-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Máy Ảnh & Máy</p>
            <p class="mb-0 text-center">Quay Phim</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/watch-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Đồng Hồ</p>

          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/shoes-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Giày Dép Nam</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/amnuoc-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thiết Bị Điện Gia Dụng</p>

          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/ball-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thể Thao & Du</p>
            <p class="mb-0 text-center">Lịch</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/bike-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Ô Tô & Xe Máy</p>
            <p class="mb-0 text-center">& Xe Đạp</p>
          </div>
        </div>
        <div class="d-flex">
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/aonu-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thời Trang Nữ</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/ghe-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Mẹ & Bé</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/noi-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Nhà Cửa & Đời</p>
            <p class="mb-0 text-center">Sống</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/son-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Sắc đẹp</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/thuoc-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Sức khỏe</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/giaynu-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Giày Dép Nữ</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/tui-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Túi Ví Nữ</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/nhan-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Phụ Kiện &</p>
            <p class="mb-0 text-center">Trang Sức Nữ</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/chocolate-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Bách Hóa Online</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/sach-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Nhà Sách Online</p>
          </div>
        </div>
      </div>
      <!-- flash sale -->
      <div class="row mx-0 sale mt-4">
        <div class="d-flex px-4 pt-4">
          <h5 class="mr-5">FLASH SALE</h5>
          <span>00</span>
          <span class="ml-3">00</span>
          <span class="ml-3">00</span>
        </div>
        <div class="row mx-0 mt-4 row-card">
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-2 h-100 position-relative">
            <div class="d-flex align-items-center justify-content-center h-100">
              <div class="diskon">
                <span class="font-weight-bold" style="color: #f53d2d">35%</span>
                <span class="text-white font-weight-bold">OFF</span>
              </div>
              <div class="wrap-img-sale">
                <img class="w-100 h-70 pt-3" src="/assets/aoden-removebg-preview.png" alt="" />
              </div>
              <div class="total w-100">
                <div class="text">
                  <span>Rp</span>
                  <span>246.250</span>
                </div>
                <div class="progresss">
                  <span> 1 TERJUAL</span>
                  <div class="progress-on"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>