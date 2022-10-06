<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Session;

class GalleryController extends Controller
{
    public function gallery(){
       
        $gallery=gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }
    public function add(){
        return view('admin.gallery.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/gallery/');
            $input['image'] = $image->hashName();
        }
        if ($request->hasFile('video'))
        {
            $video = $request->file("video");
            $video->store('public/gallery/');
            $input['video'] = $video->hashName();
        }
   
       $input['status']='1';
        Gallery::create($input);
        return redirect('home-gallery')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $gallery = Gallery::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/gallery/' . $gallery->image)) {
                Storage::delete('public/gallery/' . $gallery->image);
            }
            $image->store('public/gallery/');
    
            $input['image'] = $image->hashName();
        }
        if ($request->hasFile("video")) {
            $video = $request->file("video");
            if (Storage::exists('public/gallery/' . $gallery->video)) {
                Storage::delete('public/gallery/' . $gallery->video);
            }
            $video->store('public/gallery/');
    
            $input['video'] = $video->hashName();
        }
        $gallery->update($input);
        return redirect('/home-gallery')->with('success', 'Data Updated Successfully.');
    }
}

 