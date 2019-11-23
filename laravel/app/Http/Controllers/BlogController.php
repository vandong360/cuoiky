<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Http\Requests\BlogFormRequest;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    
    public function index()
    {
        $get = DB::table('blog')->paginate(4);

        return view('blog.index', compact('get')); 
    }

    
    public function create()
    {
        return view('blog.create'); 
    }
    
    public function store(BlogFormRequest $request)
    {
        $post = new Blog;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $get = Blog::find($id);

        return view('blog.show', compact('get')); 
    }

 
    public function edit($id)
    {
        $edit = Blog::find($id);

        return view('blog.edit', compact('edit'));
    }

    
    public function update(Request $request, $id)
    {
        $edit = Blog::find($id);
        $edit->title = $request->title;
        $edit->content = $request->content;
        $edit->update();

        return redirect()->route('blog.index');
    }

  
    public function destroy($id)
    {
        $edit = Blog::findOrFail($id);
        $edit->delete();
        
        return redirect()->route('blog.index');
    }
}
