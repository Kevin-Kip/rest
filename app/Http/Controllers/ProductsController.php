<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showAllProducts(){
        return Product::all();
    }

    public function showOneProduct($id){
        return Product::findOrFail($id);
    }

    public function updateProduct(Request $request,$id){
        $product = Product::findOrFail($id);
        if($product->update($request->all())){
            return "Updated";
        }
    }

    public function createProduct(Request $request){
        if (Product::create($request->all())){
            return Product::all();
        } else {
            return "Could not create product";
        }
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        if (!$product){
            return "Product missing";
        }

        if($product->delete()){
            return Product::all();
        } else {
            return "Cannot delete";
        }
    }
}
