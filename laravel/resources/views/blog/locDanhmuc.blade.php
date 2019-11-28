@extends('layouts.mainBlog')

@section('head.title')
   Xem Blog
@endsection

    
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        
        <div class="col-md-6" >

        {{-- <a href="" class="btn btn-info">Thêm Blog</a> --}}
        

        <div id="menu">
            <ul>
                <li><a href="{{ url('/blog/create') }}">Thêm Blog</a></li>
                <li><a href="#">Danh mục</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('blog.index') }}">Tổng hợp</a></li> 
                        <li><a href="{{ route('blog.danhmuc', "Bóng đá") }}">Bóng đá</a></li>
                        <li><a href="{{ route('blog.danhmuc', "Thể hình" ) }}">Thể hình</a></li>
                        <li><a href="{{ route('blog.danhmuc', "Bơi lội") }}">Bơi lội</a></li>
                    </ul>
                </li>
            </ul>
          </div>
          
        <br> <br><br> <br>
        <h1 style="text-align: center; color: navy;">@php echo $cate; @endphp </h1> <br> <br> <br>
        @foreach ($get as $s)
            <h3> {{ $s->title  }} </h3> 
            <p style="padding-top: 10px;"> {{ Str::limit($s->content, 250) }} </p>
            <p><a href="{{ route('blog.show', $s->id) }}">Xem thêm</a></p> <br>
        @endforeach 
        <div>
            {{$get->links()}}
        </div>

        </div>
        
       
        <div class="col-md-3"></div>       
    </div>
    
    
</div>
@endsection
