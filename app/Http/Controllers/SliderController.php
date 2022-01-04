<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Utils;
use PHPUnit\Exception;

class SliderController extends Controller
{
    public function index()
    {
        return Slider::latest()->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'img_url' => 'required'
        ]);

        try {
            return Slider::create([
                'title' => $request->title,
                'img_url' => $request->img_url,
                'status' => 1,
                'slug' => Str::slug($request->title)
            ]);
        } catch (\Throwable $error) {
            report($error);

            return false;
        }
    }

    public function delete($id)
    {
        return Slider::destroy($id);
    }

    public function update($id, Request $request)
    {
        $slider = Slider::find($id);
        $slider->update([
            'title' => $request->title,
            'img_url' => $request->img_url,
            'slug' => Str::slug($request->title)
        ]);

        return $slider;
    }

    public function show(Slider $slug){
        return $slug;
    }


}
