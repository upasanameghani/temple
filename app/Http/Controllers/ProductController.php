<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Session;

class ProductController extends Controller
{
    public function product(){
       
        $product=Product::all();
        return view('admin.products.index',compact('product'));
    }
    public function add(){
        return view('admin.products.add');
    }
    public function store(Request $request){
        $input = $request->all();
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $image->store('public/products/');
            $input['image'] = $image->hashName();
        }
       $input['status']='1';
        Product::create($input);
        // dd($input);
        return redirect('/home-product')->with('success', 'Data Added Successfully!');
       }
       public function edit($id){
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
       } 
       public function update(Request $request,$id){

        // dd($request);
        $input = $request->all();
       // dd($input);
        $product = Product::find($id);
     
    
        //dd($request->hasFile("sitelogo");
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            if (Storage::exists('public/products/' . $product->image)) {
                Storage::delete('public/products/' . $product->image);
            }
            $image->store('public/products/');
    
            $input['image'] = $image->hashName();
        }
        $product->update($input);
        return redirect('/home-product')->with('success', 'Data Updated Successfully.');
    }
}
