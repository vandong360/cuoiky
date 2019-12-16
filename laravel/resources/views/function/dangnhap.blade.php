<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" href="{{ asset('css/dangnhap.css') }}">
</head>
<body>

<div class="container">
	
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập</h3>		
			</div>

			<div class="card-body">

				<form method="POST" action="{{ route('post.login') }} " >
					{{csrf_field()}}		
					<fieldset>
						@include('error.note')
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" class="form-control" placeholder="email" name="email" value="" required>	
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password" required>
						</div>

						<div class="row align-items-center remember">
							<input type="checkbox" name="remember" value="Remember Me">Nhớ mật khẩu
						</div>

						<div class="form-group" style="text-align: center;" >
							<input type="submit" style="width: 300px;" value="ĐĂNG NHẬP" name="submit" class="btn login_btn">
						</div>
					</fieldset>	
				</form>
				<div style="text-align: center;">
					<a href="{{ route('get.reg') }}" style="text-decoration: none;"> <h5 style="color: #FFC312; "> Đăng ký tài khoản mới</h5></a>
				</div>
			</div>
			<div class="card-footer">
				   
			</div>
		</div>
	</div>
</div>
</body>
</html>