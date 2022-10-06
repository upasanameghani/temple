<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class FrontController extends Controller
{
   public function index(){
    return view('front.index');
   }
   public function about()
   {
    $data = About::all();
    // $datas= Contacttitle::find(1);

    return view('front.about',compact('data'));
   }
}
