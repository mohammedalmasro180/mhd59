<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Email;
class EmailController extends Controller
{
    
    public function show(){

 
        return view('contact');
        //
    }

    
    public function all(){

        $email=Email::all();
 
        return view('admin/email/all',compact("email"));
        //
    }
    
    public function mail(Request $request){
$data=array(
    'name' => $request->input('wlName'),
    'email'=>$request->input('wlSender'),
    'subject'=>$request->input('wlSubject'),        
    'msg'=>$request->input('wlMessage'),        
     
);
DB::table('emails')->insert($data);
echo "Record inserted successfully.<br/>";
return redirect ("/")->with('success', 'Data Your files has been successfully added');;

    }

    
    public function del($id){

        $row =DB::table('emails')->where("id",$id)->delete();
        return redirect ("/mailall");
        }    


}
