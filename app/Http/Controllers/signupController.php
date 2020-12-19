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
        $validation = Validator::make($req->all(), [
            'name' => 'required|min:3',
            'email'=> 'required',
            'cgpa' => 'required'
        ]);

        if($validation->fails()){
            return redirect()
                    ->route('home.create')
                    ->with('errors', $validation->errors())
                    ->withInput();

            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }
        if($req->hasFile('profile_pic')){
            $file = $req->file('profile_pic');
            if($file->move('uploads', $file->getClientOriginalName())){
                if($req->password==$req->confirm_password){
                    $user = new User();
                    $user->emp_name = $req->full_name;
                    $user->company_name = $req->company_name;
                    $user->user_name = $req->user_name;
                    //$user->email = $req->email;
                    $user->phone = $req->phone;
                    $user->password = $req->password;
                    $user->type = 2;
                    $user->profile_pic = $file->getClientOriginalName();
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
            else{
                return back();
            }
        }
        else{
            $req->session()->flash('msg', 'Please select a profile picture!');
            return redirect('/signup');
        }
    }
}
