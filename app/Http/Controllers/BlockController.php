<?php

namespace App\Http\Controllers;
use App\Block;
use Illuminate\Http\Request;
use DB;
class BlockController extends Controller
{

    public function show(){

 
        return view('admin/Block/index');
        //
    }
    
    public function edit(){
        $block=block::findOrFail(1);
      
        return view('admin/Block/index',compact("block"));
            }
    
public function block(Request $request){
$id=1;
    //$productsed=::findOrFail(1);
    $files ;
    $files2 ;
    $files3 ;
    $files4 ;
    if($request->hasfile('image'))
     {
        $files=$request->file('image') ;
        $files2=$request->file('image2') ;
        $files3=$request->file('image3') ;
        
       
        $name = time().rand(1,100).'.'.$files->extension();
        $name2 = time().rand(1,100).'.'.$files2->extension();
        $name3 = time().rand(1,100).'.'.$files3->extension();
        
        $files->move( public_path('assets/uploads/one/'), $name);  
        $files2->move( public_path('assets/uploads/one/'), $name2);  
        $files3->move( public_path('assets/uploads/one/'), $name3);  
        
            
        
            $files = $name;  
            $files2 = $name2;  
            $files3 = $name3;  
            
            
    }
$data=array(
    'img' => $files, 
    'adresread' => $request->input('address1'), 
    'address' => $request->input('address2'), 
    'text' => $request->input('text1'), 
    'img2' => $files2, 
    'img3' => $files3, 
    'address2' => $request->input('address3'), 
    'address3' => $request->input('address4'), 
    'text2' => $request->input('text5'), 
    'text3' => $request->input('text6'), 
    'lang'=>$request->input('lang'),   
    
);        
DB::table('blocks')->where('id', 1)->update($data);
echo "Record inserted successfully.<br/>";
return redirect ("/productall")->with('success', 'Data Your files has been successfully added');;

}
}
