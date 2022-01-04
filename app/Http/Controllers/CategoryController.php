<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index()
    {
        return Category::latest()->get();
    }

    public function destroy($id)
    {
        return Category::destroy($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:100",
            "description" => "required|max:255",
            "img_url" => "required",
        ]);

        try {
            Category::create([
                "name" => $request->name,
                "description" => $request->description,
                "img_url" => $request->img_url,
                "slug" => Str::slug($request->name),
            ]);
        } catch (Exception $e) {
            return false;
        }
    }

    public function update(Request $request, $id)
    {
        /**
		$request->validate([
            "name" => "required|max:100",
            "description" => "required|max:255",
            "img_url" => "required",
        ]);

        $product = Category::find($id);

        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "img_url" => $request->img_url,
            "slug" => Str::slug($request->name),
        ]);

        return $product;
		**/
		return $request->img_url;
		
    }

    public function show(Category $slug){
        return $slug;
    }
}
