<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class employeeHomeController extends Controller
{
    public function index(Request $req){
        if($req.session()->has('user_name')){
                $user = User::where('user_name', $req->session()->get('user_name'))->first();
                if(isset($user)){
                    return view('employeeHome')->with('user', $user);
                }
                else{
                    $req.session()->flash('msg', '*Please login first!');
                    return redirect('/login');
                }
        }
        else{
            $req.session()->flash('msg', '*Please login first!');
            return redirect('/login');
        }
    }
}