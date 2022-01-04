<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use Illuminate\Support\Str;
use App\Http\Resources\ProductResource;
class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response('success',2);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:100",
            "description" => "required|max:255",
            "img_url" => "required",
        ]);

        Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "img_url" => $request->img_url,
            "slug" => Str::slug($request->name),
            "category_id" => $request->category_id
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            "name" => "required|max:100",
            "description" => "required|max:255",
            "img_url" => "required",
        ]);

        $product = Product::find($id);

        $product->update([
            "name" => $request->name,
            "description" => $request->description,
            "img_url" => $request->img_url,
            "slug" => Str::slug($request->name),
            "category_id" => 6
        ]);

        return $product;
    }

    public function show(Product $slug){
        return new ProductResource($slug);
    }
}
