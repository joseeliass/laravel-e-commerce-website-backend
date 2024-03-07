<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blogindex(){
        $blogs= Blog::all();
        return view('blogs.blogsindex', ['blogs'=>$blogs]);
    }

    public function create(){
        return view('blogs.blogcreate');
    }


    public function store(Request $request){
       $data = $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'photo'=>'required'
        ]);

        $newBlog = Blog::create($data);

        return redirect(route('blog.blogindex'));

    }

    public function edit(Blog $blog){
        return view('blogs.blogedit',['blog'=>$blog]);
    }

    public function update(Blog $blog, Request $request){
        $data= $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'photo'=>'required'
        ]);

        $blog->update($data);

        return redirect(route('blog.blogindex'))->with('success','blog updated successfully');
    }

    public function destroy(Blog $blog){
        $blog->delete();
        return redirect(route('blog.blogindex'))->with('success','blog deleted successfully');

    }
}
