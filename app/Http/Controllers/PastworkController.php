<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastwork;
use Illuminate\Support\Facades\Storage;

class PastworkController extends Controller
{
    public function work(){
       
        $work=Pastwork::all();
        return view('admin.pastwork.index',compact('work'));
    }
    public function add(){
        return view('admin.pastwork.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/past_work/');
            $input['image'] = $image->hashName();
        }
       $input['status']='1';
       Pastwork::create($input);
        return redirect('home-work')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $work = Pastwork::find($id);
        return view('admin.pastwork.edit', compact('work'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $work = Pastwork::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/past_work/' . $work->image)) {
                Storage::delete('public/past_work/' . $work->image);
            }
            $image->store('public/past_work/');
    
            $input['image'] = $image->hashName();
        }
        $work->update($input);
        return redirect('/home-work')->with('success', 'Data Updated Successfully.');
    }
}
