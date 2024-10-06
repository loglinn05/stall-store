<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;

class ProductService
{
    /**
     * Add the product to the database table
     * @param array $data
     * @return void
     */
    public function createProduct(array $data)
    {
        $product = new Product();
        $product->title = $data["title"];
        $product->price = $data["price"];
        if (isset($data["old_price"])) {
            $product->old_price = $data["old_price"];
        }
        $product->image_url = $data["image_url"];
        $category = Category::findByTitle($data["category_title"]);
        $product->category()->associate($category);
        $product->save();
    }
}
