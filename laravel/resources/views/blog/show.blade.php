@extends('layouts.mainBlog')

@section('head.title')
    Xem blog
@endsection
    
@section('body.content')    
<div class="container">
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
            <a href="{{ url('/') }}" class="btn btn-link">
                <span class="fas fa-angle-double-left"></span>Quay lại
            </a> <br> 

            <h5>{{ $get->title }}</h5> <br>
            <p> {{ $get->content }} </p>
            <br>
            <a href="{{ url('/blog/create') }}" class="btn btn-info">Cập nhật</a>
            <form action="{{ route('blog.delete', $get->id) }}" method="post">
                @csrf
                @method('delete') <br>
                <button type="submit" class="btn btn-danger">Xóa</button>
            </form>
        </div>             
    </div>
</div>
@endsection
