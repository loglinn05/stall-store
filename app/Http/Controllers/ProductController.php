<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get all products that belong to a certain category
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $products = Product::filtered()->get();

        return ProductResource::collection($products);
    }

    /**
     * Get a product that has a given ID
     * @param string $id
     * @return ProductResource
     */
    public function show(string $id)
    {
        return new ProductResource(Product::find($id));
    }
}
