<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('head.title') </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
              <i class="fas fa-users fa-2x"> &ensp;<h2 style="float: right;" >DANH SÁCH USER </h2></i> 
            </div>

          <div class="tab">

            <table class="table table-striped">
              <thead>
                  <tr style="background-color: darkcyan;"> <!--Các trường trong table -->
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Loại tài khoản</th>
                      <th scope="col">Xóa tài khoản</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($data as $d)                
                  <tr><!--Các record trong table -->
                      <th scope="row">{{ $d->id }}</th>
                      <td>{{ $d->name }} </td>
                      <td>{{ $d->email }} </td>
                      <td>  
                        @php
                          if( $d->admin == 1) {
                            echo 'admin';
                          }
                          else {
                            echo 'user';
                          }
                        @endphp  
                      </td>

                      @if ($d->admin == 0)
                        <td>
                          <form action="{{route('del.user', $d->id) }} " method="POST" >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"><i class="fas fa-user-slash"></i></button>
                          </form>
                        </td>
                      @else
                        <td></td> 
                      @endif    
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

