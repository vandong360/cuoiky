@extends('layouts.mainBlog')

@section('head.title')
   Trang Blog
@endsection

    
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        
        <div class="col-md-6" >

        <a href="{{ url('/blog/create') }}" class="btn btn-info">Thêm Blog</a>
        <br> <br>
        @foreach ($get as $s)
            <h3> {{ $s->title }} </h3>
            <p> {{ Str::limit($s->content, 250) }} </p>
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