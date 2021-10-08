<?php
namespace App\Http\Controllers;
use App\Post;
use App\Block;
use App\Blockk;
use Illuminate\Http\Request;
use App\Products;
use App\Slider;
use DB;
class Postcontroller extends Controller
{
    public function show(){

 
        return view('admin/post/index');
        //
    }
    
    public function all(){

        $posts=Post::all();
 
        return view('admin/post/all',compact("posts"));
        //
    }
     
    
    public function index(){

        $posts=Post::all()->where("lang","ar");
        $products=Products::all()->where("lang","ar");
        $block=block::findOrFail(1);
        $blockk=blockk::findOrFail(1);
        $Slider=Slider::all()->where("lang","ar");
 
        //Slider
                return view('index',compact("posts","products","Slider","block","blockk"));
        //
    }

    
    public function del($id){

        $row =DB::table('posts')->where("id",$id)->delete();
        return redirect ("/all");
        }

        
    
    public function edit($id){
        $postsed=Post::findOrFail($id);
        return view('admin/post/update',compact("postsed"));
            }

        
            public function addpost(Request $request){
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
        DB::table('posts')->insert($data);
        echo "Record inserted successfully.<br/>";
        return redirect ("/all")->with('success', 'Data Your files has been successfully added');;
        
            }
            
        
public function updatepost(Request $request,$id){

    $postsed=Post::findOrFail($id);
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
DB::table('posts')
->where('id', 11)

->update($data);
echo "Record inserted successfully.<br/>";
return redirect ("/all")->with('success', 'Data Your files has been successfully added');;

}






            public function insertpost(){
            return 'admin/adminn';
            }
            

   
}