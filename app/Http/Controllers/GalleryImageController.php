<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function index()
    {
        $images = \App\Models\GalleryImage::all();

        $grouped = $images->groupBy('category')->map(function ($items, $category) {
            return [
                'name' => $category,
                'images' => $items->map(function ($item) {
                    return [
                        'src' => asset($item->image_path),
                        'alt' => $item->alt_text,
                    ];
                })->values()
            ];
        })->values();

        return response()->json($grouped);
    }
}
