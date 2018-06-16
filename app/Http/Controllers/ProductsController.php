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

    public function createProduct(Request $request){
        return Product::create($request->all());
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        if (!$product){
            return "Product missing";
        }

        if($product->delete()){
            return "product deleted";
        } else {
            return "Cannot delete";
        }
    }
}
