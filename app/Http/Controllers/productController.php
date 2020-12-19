<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class productController extends Controller
{
    //
    public function index(Request $req)
    {
        $products = Product::all();
        return view('manage-products')->with('product', $products);
    }

    public function storeProduct(Request $req)
    {
            
                    
                        $product = new Product();
                        $product->name = $req->name;
                        $product->quantity = $req->quantity;
                        $product->price = $req->price;

                        if ($product->save()) {
                            $req->session()->flash('msg', 'Product Added!');
                            return redirect('/manage-product');
                        } else {
                            return back();
                        }
    }

    public function editProduct(Request $req, $id)
    {
        $product = Product::find($id);
        return view('editProduct')->with('product', $product);
    }

    public function updateProduct(Request $req, $id)
    {
        $product = product::find($id);
        echo $product;
        $product->name = $req->name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;
        if ($product->save()) {
            $req->session()->flash('msg', 'Product Updated!');
            return redirect('/manage-product');
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
