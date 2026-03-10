<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Car;
use App\Models\Review;

class ResultController extends Controller
{
    public function index()
    {
        // 画像取得
        $images = ImageData::all();

        // データ取得（Modelから）
        $resultCars = Car::withImages($images);
        $reviews    = Review::all();
    
        return view('main.result', [
            'title'       => 'Welcome',
            'images'      => $images,
            'resultCars'  => $resultCars,
            'reviews'     => $reviews,
        ]);
    }
}