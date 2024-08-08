<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function main(){
        return view('products',[
            'products'=>product::all()
        ]);
    }

    public function editproduct(product $product){
        return view('editproduct',[
            'product'=>$product
        ]);
    }

    public function store(Request $request){
        $form=$request->validate([
            'product'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);

        product::create($form);
        return back()->with("message","Add product success");
    }

    public function edit(Request $request,product $product){
        $form=$request->validate([
            'product'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);

        $product->update($form);
        return redirect('/main')->with("message","Edit product success");
    }

    public function delete(Request $request,product $id){
        $id->delete();
        return back()->with("message","Delete product success");
    }
    
}
