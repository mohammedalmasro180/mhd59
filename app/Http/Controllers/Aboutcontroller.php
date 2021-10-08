<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class Aboutcontroller  extends Controller
{
    public function about($id){
        $products=Products::findOrFail($id);
        return view('/about',compact("products"));
            }

}
