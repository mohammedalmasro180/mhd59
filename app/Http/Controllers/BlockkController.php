<?php

namespace App\Http\Controllers;
use App\Blockk;
use Illuminate\Http\Request;
use DB;
class BlockkController extends Controller
{
    public function show(){

 
        return view('admin/Block2/index');
        //
    }
    
    public function edit(){
        $editblock=blockk::findOrFail(1);
      
        return view('admin/Block2/index',compact("editblock"));
            }
    
public function block(Request $request){
$id=1;
    //$productsed=::findOrFail(1);
    $files ;
    if($request->hasfile('image'))
     {
        $files=$request->file('image') ;
        
       
        $name = time().rand(1,100).'.'.$files->extension();
        
        $files->move( public_path('assets/uploads/one/'), $name);  
        
            
        
            $files = $name;  
            
            
    }
$data=array(
    'img' => $files, 
    
    'address' => $request->input('address'), 
    'text' => $request->input('text'), 
    
);        
DB::table('blockks')->where('id', 1)->update($data);
echo "Record inserted successfully.<br/>";
return redirect ("/productall")->with('success', 'Data Your files has been successfully added');;

}
}
