<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\employee;


class LoginController extends Controller
{
    public function logine(){
        return view('service.login.login');
    }
    public function loginSubmit(Request $req){
        $c = employee::where('username',$req->username)
                  ->where('password',$req->password)->where('status','active')
                  ->first();
        if($c){
            session()->put('user',$c->id);
            if ($req->remember) {
                setcookie('remember',$req->username, time()+36000);
                Cookie::queue('name',$c->username."This is for testing",time()+60);
            }else{
                setcookie('remember',"");
                Cookie::queue('name',"");
            }
            return redirect()->route('employeelist');
        }
        return redirect()->route('logine');

    }

    public function logout(){
        session()->flush();
        return redirect()->route('logine');
    }


    public function home()
    {
        return view('home');
    }

}
