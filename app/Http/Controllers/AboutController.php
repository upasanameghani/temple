<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Crypt;

class AboutController extends Controller
{
    public function about(){
       
        $about=About::all();
        return view('admin.aboutus.index',compact('about'));
    }
    public function add(){
        return view('admin.aboutus.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/abouts/');
            $input['image'] = $image->hashName();
        }
        // dd($input);
       $input['status']='1';
        About::create($input);
        return redirect('/home-about')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $about = About::find($id);
        return view('admin.aboutus.edit', compact('about'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $about = About::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/abouts/' . $about->image)) {
                Storage::delete('public/abouts/' . $about->image);
            }
            $image->store('public/abouts/');
    
            $input['image'] = $image->hashName();
        }
        $about->update($input);
        return redirect('/home-about')->with('success', 'Data Updated Successfully.');
    }
}
