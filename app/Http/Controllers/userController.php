<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
    public function index(Request $req)
    {
        $users = User::all();
        //->where('user_name', '!=', $req->session()->get('user_name'));
        //print_r($users['emp_id']);
        return view('manage-users')->with('users', $users);
    }

    public function storeUser(Request $req)
    {
        
            
                    if ($req->password == $req->confirm_password) {
                        $user = new User();
                        $user->emp_name = $req->full_name;
                        $user->user_name = $req->user_name;
                        $user->phone = $req->phone;
                        $user->password = $req->password;
                        $user->type = 1;
                        if ($user->save()) {
                            $req->session()->flash('msg', 'Employee Added!');
                            return redirect('/manage-user');
                        } else {
                            return back();
                        }
                    } else {
                        $req->session()->flash('msg', 'Passwords did not match!');
                        return redirect('/manage-user');
                    }
                
            
                }

    public function editUser(Request $req, $id)
    {
        $user = User::find($id);
        return view('edit')->with('user', $user);
    }

    public function updateUser(Request $req, $id)
    {
        $user = User::find($id);
        echo $user;
        $user->emp_name = $req->full_name;
        $user->phone = $req->phone;
        if ($user->save()) {
            $req->session()->flash('msg', 'User Updated!');
            return redirect('/manage-user');
        } else {
            return back();
        }
    }

    public function deleteUser(Request $req, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            $req->session()->flash('msg', 'User Deleted!');
            return redirect('/manage-user');
        } else {
            $req->session()->flash('msg', 'User Not Found!');
            return redirect('/manage-user');
        }
    }

    public function getUser(Request $req){
        $user = $req->userName;
        echo $user;
        $user=User::where('emp_name','LIKE','%'.$req->userName.'%')
        ->where('user_name','LIKE','%'.$req->userName.'%')
        ->get()
        ->first();
        //echo "<script>alert($user);</script>";
        //$user = "Hello world";
        //return response()->json(['user'=>$user]);
        //return response()->json(array('user'=> $user), 200);
        return $user;
    }
}
