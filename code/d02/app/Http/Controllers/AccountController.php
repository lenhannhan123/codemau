<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AccountController extends Controller
{
    public function view(){
        $ds = DB::table('tbuser')->get();
        return view('admin.index',['ds'=>$ds]);   
    }



    public function create()
    {
        return view('admin.create');
    }


    public function createuser(Request $request)
    {
       $user = $request->input(key:'user');
       $password = $request->input(key:'password');
       $mail = $request->input(key:'mail');
       $role = $request->input(key:'role');

       DB::table('tbuser')->insert(['username'=>$user,'password'=>$password,'email'=>$mail,'role'=>$role]);
    //    return $this->view();
       return redirect()->route('display-user');
    }



    public function resetpass($id)
    {
        DB::table('tbuser')->where('id',$id)->update(['password'=>'123']);
        return 'Reset Thanh Cong Password la 123';
    }




    public function getbyid($id)
    {
      $ds = DB::table('tbuser')->find($id);
      return view('user.index',['ds'=>$ds]);
    }





    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect()->route('indexlist');
        }



        
    public function checklogin(Request $request)
    {
        if($request->session()->has('user')){
            $request->session()->forget('user');
        }
        
        $user = $request->input(key:'user');
        $password = $request->input(key:'password');
        $mess="";
        $data= DB::table('tbuser')->where('username',$user)->get()->first();

        if(isset($data)){
            if($data->password==$password){
                $request->session()->put('user', $data);
                if($data->role==0){
                    return redirect()->route('user',$data->id);
                    
                }else
                {
                    return redirect()->route('display-user');
                }
            }else{
                $mess="User Name or Password incorrect ";
            }
        }else  $mess="User Name or Password incorrect ";

        return view('admin.login',compact('mess'));

    }
}
