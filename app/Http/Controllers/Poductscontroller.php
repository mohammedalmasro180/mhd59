<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;
class Poductscontroller extends Controller
{

    public function show(){

 
        return view('admin/Product/index');
        //
    }
    
    public function all(){

        $products=Products::all();
 
        return view('admin/Product/all',compact("products"));
        //
    }
     
    
    public function index(){

        $products=Products::all();
 
        return view('index',compact("products"));
        //
    }

    
    public function del($id){

        $row =DB::table('products')->where("id",$id)->delete();
        return redirect ("/productall");
        }

        
    
        public function edit($id){
            $productsed=Products::findOrFail($id);
            return view('admin/Product/update',compact("productsed"));
                }
    
                public function about(){
                    $products=Products::findOrFail(12);
                    return view('/about',compact("products"));
                        }
                    
            public function addProduct(Request $request){
                $files ;
                if($request->hasfile('image'))
                 {
              $files=$request->file('image') ;
                    
                        $name = time().rand(1,100).'.'.$files->extension();
                        $files->move( public_path('assets/uploads/one/'), $name);  
                        $files = $name;  
                }
        $data=array(
            'address' => $request->input('address'),
            'img'=>$files,
            'lang'=>$request->input('lang'),
             'text'=>$request->input('text'),        
        );
        DB::table('products')->insert($data);
        echo "Record inserted successfully.<br/>";
        return redirect ("/productall")->with('success', 'Data Your files has been successfully added');;
        
            }
            
        
public function updateProduct(Request $request,$id){

    $productsed=Products::findOrFail($id);
    $files ;
    if($request->hasfile('image'))
     {
  $files=$request->file('image') ;
        
            $name = time().rand(1,100).'.'.$files->extension();
            $files->move( public_path('assets/uploads/one/'), $name);  
            $files = $name;  
    }
$data=array(
'address' => $request->input('address'),
'img'=>$files,
'lang'=>$request->input('lang'),
 'text'=>$request->input('text'),        
);
DB::table('products')
->where('id', $request->input('id'))

->update($data);
echo "Record inserted successfully.<br/>";
return redirect ("/productall")->with('success', 'Data Your files has been successfully added');;

}
}
