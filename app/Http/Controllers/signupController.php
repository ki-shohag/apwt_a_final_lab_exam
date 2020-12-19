<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SignUpValidation;
use Illuminate\Support\Facades\Validator;

class signupController extends Controller
{
    //
    public function index(Request $request){
        return view('signup');
    }
    public function storeUser(SignUpValidation $req){
        
                if($req->password==$req->confirm_password){
                    $user = new User();
                    $user->emp_name = $req->full_name;
                    $user->user_name = $req->user_name;
                    $user->phone = $req->phone;
                    $user->password = $req->password;
                    $user->type = 1;
                    if($user->save()){
                        $req->session()->flash('msg', 'Sign Up Complete!');
                        return redirect('/login');
                    }
                    else{
                        return back();
                    }
                }
                else{
                    $req->session()->flash('msg', 'Passwords did not match!');
                    return redirect('/signup');
                }
            }
}
