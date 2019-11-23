@extends('layouts.mainBlog')

@section('head.title')
   Edit blog
@endsection

    
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3>Cập nhật nội dung </h3> <br>
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
            
            <form action="{{ route('blog.update', $edit->id) }}" method="post" class="form-horizontal">
                @method('put')
                <input type="hidden" name="_token" value="{{  csrf_token()  }}">

                <div class="form-group">
                    <label for="title" class="control-lable"><b>Tiêu đề:</b> </label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $edit->title ?? old('title') }}" >
                </div>  

                <div class="form-group">
                    <label for="content" class="control-lable"><b> Nội dung:</b></label>
                    <textarea class="form-control"  name="content" id="content" rows="6">{{ $edit->content ?? old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
                </div>
            </form>         
        </div>
    </div>
</div>
@endsection