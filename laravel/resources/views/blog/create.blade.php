@extends('layouts.mainBlog')

@section('head.title')
   New blog
@endsection

    
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <a href="{{ route('blog.index') }}" class="btn btn-link">
                <span class="fas fa-angle-double-left"></span>Quay lại
            </a>  <br> <br>
            <h2>Tạo bài viết mới</h2> <br>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">    
            
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Cảnh báo!</strong> Đã xảy ra một số lỗi khi bạn nhập. <br> <br>
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{  $error }}</li>
                        @endforeach
                    </ul>                   
                </div> 
            @endif    
            
            <form action="{{ route('blog.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data"> 

                <input type="hidden" name="_token" value="{{  csrf_token()  }}">

                <div class="form-group">
                    <label for="category" class="control-lable"><b>Danh mục:</b></label> <br>
                    <select class="form-control" name="category" id="category" >
                        <option value="Bóng đá">Bóng đá</option>
                        <option value="Thể hình">Thể hình</option>
                        <option value="Bơi lội">Bơi lội</option>
                    </select>
                </div> 

                <div class="form-group">
                    <label for="title" class="control-lable"><b>Tiêu đề:</b>    
                    <input class="form-control" type="text" name="title" id="title" required placeholder="Nhập tiêu đề bài viết">
                </div>  

                <div class="form-group">
                    <label for="content" class="control-lable"><b> Nội dung:</b></label>
                    <textarea class="form-control" type="text" name="content" id="content" required placeholder="Nhập nội dung bài viết" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="img" class="control-lable"><b>Thêm ảnh:</b></label>
                    <input type="file" name="img" id="img" required="false">
                </div> 

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                </div>
            </form>  

            <hr>                

            <br> <br>     
        </div>
    </div>
</div>
@endsection