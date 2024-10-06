<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Get all categories
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Category::all();
    }
}
