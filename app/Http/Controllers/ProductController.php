<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.add-product');
    }

    public function addCategory()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    // post addcategory
    public function addCategoryPost(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->category = $request->category;
        $category->save();

        return redirect()->back()->with('success', 'Category Added Successfully');
    }
}
