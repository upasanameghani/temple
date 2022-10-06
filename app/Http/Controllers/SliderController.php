<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
   public function slider(){
       
       $slider=Slider::all();
       return view('admin.slider.index',compact('slider'));
   } 

   public function add(){
       return view('admin.slider.add');
   }

   public function store(Request $request){
    $input = $request->all();
    if ($request->hasFile("image")) {
        $image = $request->file("image");
        $image->store('public/slider/');
        $input['image'] = $image->hashName();
    }
   $input['status']='1';
    Slider::create($input);
    return redirect('/')->with('status', 'Data Added Successfully!');
   }

   public function edit($id){
    $slider = Slider::find($id);
    return view('admin.slider.edit', compact('slider'));
   }

   public function update(Request $request,$id){

    // dd($request);
    $input = $request->all();
   // dd($input);
    $slider = Slider::find($id);
 

    //dd($request->hasFile("sitelogo");
    if ($request->hasFile("image")) {
        $image = $request->file("image");
        if (Storage::exists('public/slider/' . $slider->image)) {
            Storage::delete('public/slider/' . $slider->image);
        }
        $image->store('public/slider/');

        $input['image'] = $image->hashName();
    }
    $slider->update($input);
    return redirect('/home-slider')->with('status', 'Data Updated Successfully.');
}
}
