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
      <div class="col-sm-10">  
            <div id="h2">
              <i class="fas fa-tasks fa-2x"> &ensp;<h2 style="float: right;" >THỐNG KÊ LỊCH ĐẶT SÂN</h2></i> 
            </div>

           <div class="tab">
            <table class="table table-striped">
              <thead>
                  <tr style="background-color: darkcyan;"> <!--Các trường trong table -->
                      <th scope="col">Tên Khách Hàng</th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Sân</th>
                      <th scope="col">Ngày thuê sân</th>
                      <th scope="col">Khung giờ</th>
                      <th scope="col">Đặt vào lúc</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($book as $s)                
                  <tr><!--Các record trong table -->
                      <td scope="row">{{ $s->tenKH }} </td>
                      <td>{{ $s->sdt }} </td>
                      <td>{{ $s->tenSan }}</td>         
                      <td>{{ $s->date }}</td>         
                      <td>{{ $s->time }}</td>         
                      <td>{{ $s->created_at }}</td>                        
                  </tr>   
                @endforeach
              </tbody>
            </table>
          </div>
      </div>

    </div>  
    
    
    @include('layouts.footer')
</div>
</body> 
</html>

