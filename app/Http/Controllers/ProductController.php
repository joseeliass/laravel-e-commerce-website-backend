<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data= $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit',['product'=>$product]);
    }

    public function update(Product $product, Request $request){
        $data= $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'photo'=>'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','product updated successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','product deleted successfully');

    }
}
