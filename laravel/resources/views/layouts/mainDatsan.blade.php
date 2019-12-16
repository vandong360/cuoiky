<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('head.title') </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script> -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/JiSlider.css') }}" rel="stylesheet"> 
<!-- light-box -->
<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
<!-- Owl-carousel-CSS -->
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/datsan.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/b1d9add112.js" crossorigin="anonymous"></script>
</head>
<body>  
    <div  style="overflow: hidden;">
    @include('layouts.header')

   
    <div class="row">
      <div class="col-sm-2">
          <div id="viewport">
              <!-- Sidebar -->
              <div id="sidebar">
                <header>
                  <li>Danh Sách Quận</li>
                </header>
                <ul class="nav">
                  <li>
                    <a href="{{ route('quan.index',1) }}">
                      <i class="fas fa-caret-right">&ensp;</i> Quận Hải Châu <span>2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('quan.index',2) }}">
                      <i class="fas fa-caret-right">&ensp;</i> Quận Ngũ Hành Sơn <span>2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('quan.index',3) }}">
                      <i class="fas fa-caret-right">&ensp;</i> Quận Liên Chiểu <span>2</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('quan.index',4) }}">
                      <i class="fas fa-caret-right">&ensp;</i> Quận Cẩm Lệ <span>2</span>
                    </a>
                  </li> 
                </ul>


              @if (Auth::check()&&Auth::user()->admin == 1 )
                <header>
                    <li>Administrator</li>
                </header>
                <ul class="nav">
                    <li>
                      <a href="{{ route('list.user') }}">
                          <i class="fas fa-users">&ensp;</i> Quản lý User 
                      </a>
                    </li>
                    <li>
                      <a href="{{ route('list.book') }}">
                          <i class="fas fa-tasks">&ensp;</i> Quản lý lịch đặt sân 
                      </a>
                </ul>
              @endif 
              </div>         
          </div>
      </div>
      <div class="col-sm-8">  
            <div id="h2">
              <i class="fas fa-futbol fa-2x"> &ensp;<h2 style="float: right;" >SÂN BÓNG QUẬN {{ $quan->tenQuan }} </h2></i> 
            </div>
           
            
            @foreach ($data as $d)        
            <div class="box">
              <div class="row">
                  <div class="col-sm-5">
                      <img src="{{ asset('images/'.$d->img) }}" alt=""> 
                  </div>
                    
                  <div class="col-sm-7">
                      <h2  class="box-content" id="box-h2" >Sân bóng {{ $d->tenSan }} </h2>
                      <span class="box-content">Địa chỉ: {{ $d->address }} </span> <i class="fas fa-map-marker-alt"></i> <br> 
                      <div class="clearfix"></div>
                      <span class="box-content"><b> Loại Sân: Sân 7 người</b> </span> <br> 
                      <hr>
                      <span class="box-content"> <i> Mở cửa: Sáng 6h00 - 10h30, Chiều 15h00 - 22h30</i></span> <br>
                      <span class="box-content"><i> Từ thứ 2 - Chủ nhật.</i></span>
                      <hr>

                      <h4 class="box-content" style="color: red;">Giá thuê sân: 300.000đ/1h30' </h4>
                      <a href="{{ route('san.index', $d->idSan)}} ">
                        <button style="margin-left: 2rem;" class="btn btn-dark"> <i class="fas fa-long-arrow-alt-right"></i> Chi tiết</button>
                      </a>
                  </div>
              </div>
            </div>     
            @endforeach
           
      </div>
      <div class="col-sm-2"></div>
    </div>  
    
    
    @include('layouts.footer')
</div>
</body> 
</html>

