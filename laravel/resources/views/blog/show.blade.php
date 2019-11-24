@extends('layouts.mainBlog')

@section('head.title')
    Chi tiết blog
@endsection
    
@section('body.content')    
<div class="container">
    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">
            <a href="{{ route('blog.index') }}" class="btn btn-link">
                <span class="fas fa-angle-double-left"></span>Quay lại
            </a> <br> 

            {{-- @php $content = $get->content; @endphp --}}
            <h2 style="text-align: center">{{ $get->title }}</h2> <br> <br>
            <p style="font-size: 17px; font-family: Tahoma;"> @php echo nl2br($get->content); @endphp </p>
            <br>
            <a href="{{ route('blog.edit', $get->id) }}" class="btn btn-info">Cập nhật</a>
            <form action="{{ route('blog.delete', $get->id) }}" method="post">
                @csrf
                @method('delete') <br>
                <button type="submit" class="btn btn-danger">Xóa</button><br> <br>
            </form>
        </div>             
    </div>
</div> 
@endsection
