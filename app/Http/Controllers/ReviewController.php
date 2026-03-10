<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Car;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        // 画像取得
        $images = ImageData::all();

        // データ取得（Modelから）
        $reviews    = Review::all();
    
        return view('main.review', [
            'title'       => 'Review',
            'images'      => $images,
            'reviews'     => $reviews,
        ]);
    }
}