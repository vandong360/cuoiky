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
          <div class="inf"> 
            <img src=" {{ asset('images/'.$get->img) }} " alt="{{ $get->img }}">
            <div id="inf-h2">
              <i class="fas fa-futbol fa-2x"> &ensp;<h2 style="float: right;" >SÂN BÓNG {{ $get->tenSan}} </h2></i> 
            </div>
           
            <span>Địa chỉ: {{ $get->address }} </span> <br>  
            <span><b>Loại Sân: Sân 7 người</b></span>
            <hr>
            <span> <i> Mở cửa: Sáng 6h00 - 10h30</i></span> <br>
            <span> <i>&emsp; &emsp;&emsp;&ensp;Chiều 15h00 - 22h30</i></span> <br>
            <span><i> Từ thứ 2 - Chủ nhật.</i></span>
            <hr>
            <h4 style="color: orangered; margin-left: 2rem;"><b>Giá thuê sân: 300.000đ/90'</b></h4>
            <hr> <br><br>

     
            <h2 id="n2">ĐẶT SÂN</h2> <br> 
            <div class="row">               
              <div class="col-sm-4"> 
                    <form id="form-date" class="form-horizontal" method="POST" action="{{ route('get.date', $get->idSan ) }} ">
                      <input type="hidden" name="_token" value="{{  csrf_token()  }}">
                      <div class="form-group">
                        <label class="control-lable">Chọn ngày đặt: </label>
                        <input type="date" min="{{ $now->toDateString()  }}" max="{{ $now->addDays(7)->toDateString() }}" name="date" class="form-control" >
                      </div>

                      <div class="form-group">
                          <button style="background-color: #0b911c;" type="submit" class="btn btn-info"> <i class="fas fa-calendar-check"></i> Tìm giờ trống</button>          
                      </div>         
                    </form>
              </div>
            

              <div class="col-sm-8">  
                <div class="fix">      
                    @if (Auth::check())
                      @foreach ($df as $d )                            
                        <form action="{{ route('push') }} " class="form-horizontal" method="POST" style="float: left; margin: 0 0 5px 5px;">    
                            <input type="hidden" name="_token" value="{{  csrf_token()  }}">             
                            <input type="hidden" name="date" value="{{ $date ?? '' }}">     
                            <input type="hidden" name="name" value="{{ $name ?? '' }}">     
                            <input type="hidden" name="id" value="{{ $get->idSan }}">     

                            <input type="submit"  class="btn btn-light" name="time" value="{{$d}} ">
                        </form>
                      @endforeach 
                    @else 
                      <span class="alert alert-danger "> Bạn phải đăng nhập trước!</span>
                    @endif
                    
                </div>                          
              </div>

            </div>
          </div>
      </div>
      <div class="col-sm-2"></div>
    </div>   
    @include('layouts.footer')
</div>
</body> 
</html>

