<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="navbar text-white w-[100vw] flex flex-col items-center justify-start bg-red-600">
            <div class="sub-menu w-[80%] flex justify-between text-[14px]">
                <div class="menu__connection">
                    <ul class="flex">
                        <li class="mr-[8px] pr-[8px] border-r-2">Kenh Nguoi Ban</li>
                        <li class="mr-[8px] pr-[8px] border-r-2">Tro thanh Nguoi ban Shopee</li>
                        <li class="mr-[8px] pr-[8px] border-r-2">Tai ung dung</li>
                        <li>Ket noi</li>
                    </ul>
                </div>
                <div class="menu__user flex">
                    <ul class="flex">
                        <li class="mr-[8px]">Thong bao</li>
                        <li class="mr-[8px]">Ho tro</li>
                    </ul>
                    <div class="mr-[8px]">
                        Tieng Viet
                    </div>
                    <div class="flex font-bold">
                        <div class="mr-[8px] pr-[8px] border-r-2">Dang ky</div>
                        <div>Dang nhap</div>
                    </div>
                </div>
            </div>
            <div class="menu w-[80%] my-[7px] flex items-center justify-between">
                <div class="w-[12%]">
                    <img src="{{ URL::to('/assets/shopee-logo-31418.png') }}" class="w-[100%]">
                </div>
                <div class="flex flex-col w-[70%] mt-[7px]">
                    <div class="bg-white h-[40px] mb-[5px] flex justify-between rounded-[3px]">
                        <input placeholder="SIEU HOI XIAOMI" type="text" class="bg-transparent text-black h-[100%] w-[70%] pl-[30px]">
                        <div class="w-[50px] bg-red-700 m-[2px] flex items-center justify-center rounded-[3px]">
                            <div class="">Q</div>
                        </div>
                    </div>
                    <div>
                        <ul class="flex text-[13px]">
                            <li class="mr-[8px] pr-[8px]">Ao croptop</li>
                            <li class="mr-[8px] pr-[8px]">Giay</li>
                            <li class="mr-[8px] pr-[8px]">Giay Cao Got</li>
                            <li class="mr-[8px] pr-[8px]">Bong Tay Trang</li>
                            <li class="mr-[8px] pr-[8px]">My Bao Hiem</li>
                            <li class="mr-[8px] pr-[8px]">Sandal Nu</li>
                            <li class="mr-[8px] pr-[8px]">Tui Tote</li>
                            <li class="mr-[8px] pr-[8px]">Quan</li>
                        </ul>
                    </div>
                </div>
                <div class="mr-[50px]">
                    <img src="{{ URL::to('/assets/icons8-shopping-cart-96.png') }}" class="w-[40px]" alt="">
                </div>
            </div>
        </div>
        <div class="body bg-slate-200 h-[100vh] flex flex-col items-center">
            <div class="category bg-white w-[80%] mt-[20px] h-fit">
                <div class="p-[1.2em] text-gray-500 font-semibold text-[16px]">
                    DANH MUC
                </div>
                <div class="inline-block w-[100%]">
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    <div class="w-[10%] h-[150px] border-[1px] border-gray-100 flex flex-col items-center justify-center float-left">
                        <img src="{{ URL::to('/assets/doge.jpeg') }}" class="w-[60%] mb-[10px] rounded-full" alt="">
                        <p class="text-[14px]">Thoi Trang Nam</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
