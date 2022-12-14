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
          <span>K??nh ng?????i b??n</span>
          <div class="hr1 mx-2"></div>
          <span>Tr??? th??nh ng?????i b??n shopee</span>
          <div class="hr1 mx-2"></div>
          <span>T???i ???ng d???ng</span>
          <div class="hr1 mx-2"></div>
          <span>K???t n???i</span>
          <img class="icon-media mr-2 ml-2" src="/assets/facebook.png" alt="" />
          <img class="icon-media mr-2" src="/assets/instagram.png" alt="" />

        </div>
        <div class="d-flex align-items-center">
          <img class="icon-media mr-2" src="/assets/notif.png" alt="" />
          <span class="mr-4">Th??ng b??o</span>
          <img class="icon-media mr-2" src="/assets/bantuan.png" alt="" />
          <span class="mr-4">H??? tr???</span>
          <span class="font-weight">????ng k??</span>
          <div class="hr1 mx-2"></div>
          <span class="font-weight">????ng nh???p</span>
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
            <input type="text" class="form-control" placeholder="????ng k?? v?? nh???n voucher b???n m???i ?????n 70k!" />
            <div class="wrap-icon-s">
              <img class="icon-media" src="/assets/search.png" alt="" />
            </div>
          </div>
          <div class="under-input d-flex mt-3">
            <span>??o kho??c</span>
            <span class="mr-3">D??p</span>
            <span class="mr-3">T??i X??ch N???</span>
            <span class="mr-3">??o Croptop</span>
            <span class="mr-3">???p Iphone</span>
            <span class="mr-3">V??y</span>
            <span class="mr-3">Tai nghe Bluetooth</span>
            <span class="mr-3">B??nh Tr??ng Ph??i S????ng</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <!-- kategory -->
      <div class="row mx-0 mt-0 kategory">
        <h5 class="p-4">DANH M???C</h5>
        <div class="d-flex">
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-400 h-100 " src="/assets/??o-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Th???i trang nam</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/iphone-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">??i???n tho???i &</p>
            <p class="mb-0 text-center">Ph??? ki???n</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/tv-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thi???t B??? ??i???n T???</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/laptop-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">M??y T??nh &</p>
            <p class="mb-0 text-center">Laptop</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/camera-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">M??y ???nh & M??y</p>
            <p class="mb-0 text-center">Quay Phim</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/watch-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">?????ng H???</p>

          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/shoes-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Gi??y D??p Nam</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/amnuoc-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Thi???t B??? ??i???n Gia D???ng</p>

          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/ball-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Th??? Thao & Du</p>
            <p class="mb-0 text-center">L???ch</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/bike-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">?? T?? & Xe M??y</p>
            <p class="mb-0 text-center">& Xe ?????p</p>
          </div>
        </div>
        <div class="d-flex">
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/aonu-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Th???i Trang N???</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/ghe-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">M??? & B??</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/noi-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Nh?? C???a & ?????i</p>
            <p class="mb-0 text-center">S???ng</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/son-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">S???c ?????p</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/thuoc-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">S???c kh???e</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/giaynu-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Gi??y D??p N???</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/tui-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">T??i V?? N???</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/nhan-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Ph??? Ki???n &</p>
            <p class="mb-0 text-center">Trang S???c N???</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/chocolate-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">B??ch H??a Online</p>
          </div>
          <div class="d-flex flex-column align-items-center card-kategory">
            <div class="wrap-img">
              <img class="w-100 h-100" src="/assets/sach-removebg-preview.png" alt="" />
            </div>
            <p class="mb-0 text-center mt-2">Nh?? S??ch Online</p>
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