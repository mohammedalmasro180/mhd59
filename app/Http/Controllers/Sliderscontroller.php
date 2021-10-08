<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use DB;
class Sliderscontroller extends Controller
{

    public function show(){

 
        return view('admin/Slider/index');
        //
    }
    
    public function all(){

        $Sliders=Slider::all();
 
        return view('admin/Slider/all',compact("Sliders"));
        //
    }
     
    
    public function index(){

        $Sliders=Slider::all();
 
        return view('index',compact("Sliders"));
        //
    }

    
    public function del($id){

        $row =DB::table('Sliders')->where("id",$id)->delete();
        return redirect ("/Sliderall");
        }

        
    
    public function edit($id){
        $Slidersed=Sliders::findOrFail($id);
        return view('admin/Slider/update',compact("Slidersed"));
            }

        
            public function addSlider(Request $request){
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
        DB::table('Sliders')->insert($data);
        echo "Record inserted successfully.<br/>";
        return redirect ("/Sliderall")->with('success', 'Data Your files has been successfully added');;
        
            }
            
        
public function updateSlider(Request $request,$id){

    $Slidersed=Slider::findOrFail($id);
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
DB::table('Sliders')
->where('id', $request->input('id'))

->update($data);
echo "Record inserted successfully.<br/>";
return redirect ("/Sliderall")->with('success', 'Data Your files has been successfully added');;

}
}