<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class poagesController extends Controller
{
   public function index()
   {

return view('pages.index');

   }


public function about()
{
return view('pages.about');

}


public function services()
{
    $data=array(
        "HTML",
        "JAVASCRIPT",
        "PHP",
        "C++",
    );
return view('pages.services')->with('menu',$data);

}
}