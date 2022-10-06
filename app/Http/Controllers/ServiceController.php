<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function service(){
       
        $service=Service::all();
        return view('admin.service.index',compact('service'));
    }
    public function add(){
        return view('admin.service.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/service/');
            $input['image'] = $image->hashName();
        }
       $input['status']='1';
       Service::create($input);
        return redirect('home-service')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $service = Service::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/service/' . $service->image)) {
                Storage::delete('public/service/' . $service->image);
            }
            $image->store('public/service/');
    
            $input['image'] = $image->hashName();
        }
        $service->update($input);
        return redirect('/home-service')->with('success', 'Data Updated Successfully.');
    }
}