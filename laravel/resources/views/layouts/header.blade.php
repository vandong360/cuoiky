<div class="main">	
    <div class="agileits_web_banner_nav">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">                
                <h1><a class="navbar-brand"><img src="{{ asset('images/logo.jpeg') }}" style="width: 12%;" alt=""></a></h1>	
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu--iris">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item menu__item--current"><a href="{{ url('/') }}" >Trang chủ</a></li>
                        <li class="menu__item"><a href="#quan" class="menu__link scroll">Tìm sân</a></li>
                        <li class="menu__item"><a href="{{ url('/blog') }}">Blog</a></li>
                        <li class="menu__item">   
                            <a class="nav-link text-white" href="{{ asset('/dangnhap') }}">Đăng nhập&ensp;</a>
                            {{-- {{Auth::user()->name}} --}}
                        </li>
                    </ul>						
                </nav>
            </div>
        </nav>
    </div>
</div>
