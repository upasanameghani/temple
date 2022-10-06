<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function blog(){
       
        $blog=Blog::all();
        return view('admin.blog.index',compact('blog'));
    }
    public function add(){
        return view('admin.blog.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/blog/');
            $input['image'] = $image->hashName();
        }
       $input['status']='1';
        Blog::create($input);
        return redirect('home-blog')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $blog = Blog::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/blog/' . $product->image)) {
                Storage::delete('public/blog/' . $product->image);
            }
            $image->store('public/blog/');
    
            $input['image'] = $image->hashName();
        }
        $blog->update($input);
        return redirect('/home-blog')->with('success', 'Data Updated Successfully.');
    }
}

