<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
      <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <script src="https://kit.fontawesome.com/b1d9add112.js" crossorigin="anonymous"></script>

	<!--Custom styles-->
	<link rel="stylesheet" href="{{ asset('css/reg.css') }}">
</head>
<body>
    
</body>
    
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
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
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"> <br>
            <a href="{{ route('login') }}" class="btn btn-link">
                <span class="fas fa-angle-double-left"></span>Quay lại
            </a>
            <h2 style="text-align: center;"> ĐĂNG KÝ TÀI KHOẢN MỚI </h2> <br>

            <form action="{{ route('post.reg') }} " class="form-horizontal" method="POST">
                <input type="hidden" name="_token" value="{{  csrf_token()  }}">
               
               
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }} </li>
                        @endforeach
                    </div>
                @endif
   
                
                <div class="form-group">
                    <label for="email" class="form-label">Nhập email* </label>
                    <input class="form-control" type="email"  name="email" id="email" required placeholder="Nhập email đăng nhập">
                </div>
                
                <div class="form-group">
                    <input class="form-control" type="hidden"  name="admin" id="admin" value="0">
                </div>
            
                <div class="form-group">
                    <label for="name" class="form-label">Tên tài khoản* </label>
                    <input class="form-control" type="text" name="name" id="name" required placeholder="Long, Tuan,...">
                </div>

                
                <div class="form-group">
                    <label for="password" class="form-label">Password* </label>
                    <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Nhập lại Password* </label>
                    <input class="form-control" type="password" name="re_password" id="re_password" required placeholder="Re-password" >
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>  
    </div>
</body>
</html>

