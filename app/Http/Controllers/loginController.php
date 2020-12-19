<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function verify(Request $req)
    {
        $user = User::where('user_name', $req->user_name)
        ->where('password', $req->password)
        ->first();

        if(isset($user['user_name']) ){
            $req->session()->put('user_name', $user['user_name']);
            $req->session()->put('type', $user['type']);
            if($user['type']==2){
                return redirect('/home');
            }
            else if($user['type']==1){
                return redirect('/employeeHome');
            }
        }
        else{
    		$req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
}