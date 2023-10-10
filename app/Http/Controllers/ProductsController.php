<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\BaseController;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{
    public function getProducts(){
        $allProducts = Product::all();
        
        return $this->responseHandler(Product::PRODUCT_GET_SUCCESS, $allProducts, 200, true);
    }

    public function getProductById(Request $request, $id){
        $product = Product::find($id);

        if($product){
            return $this->responseHandler(Product::PRODUCT_GET_BY_ID_SUCCESS, $product, 200, true);
        }

        return $this->responseHandler(Product::PRODUCT_NOT_FOUND, null, 400, false);
    }

    public function addProduct(ProductRequest $request){
        $product = new Product;

        $product->title = $request->title;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return $this->responseHandler(Product::PRODUCT_ADD_SUCCESS, $product, 200, true);
    }

    public function editProduct(ProductRequest $request, $id){
        $product = Product::find($id);

        if($product){
            $product->title = $request->title;
            $product->image = $request->image;
            $product->price = $request->price;
            $product->description = $request->description;
    
            $product->save();
    
            return $this->responseHandler(Product::PRODUCT_UPDATE_SUCCESS, $product, 200, true);
        }

        return $this->responseHandler(Product::PRODUCT_NOT_FOUND, null, 400, false);

    }

    public function deleteProduct(Request $request, $id){
        $flight = Product::find($id);

        if($flight){
            $flight->delete();

            return $this->responseHandler(Product::PRODUCT_DELETE_SUCCESS, null, 200, true);
        }
        
        return $this->responseHandler(Product::PRODUCT_NOT_FOUND, null, 400, false);
    }
}
