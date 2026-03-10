<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Car;
use App\Models\Reason;
use App\Models\Step;
use App\Models\Review;

class WelcomeController extends Controller
{
    public function index()
    {
        // 画像取得
        $images = ImageData::all();

        // データ取得（Modelから）
        $resultCars = Car::withImages($images);
        $reviews    = Review::all();
        $pickupCars = array_slice($resultCars, 0, 3);
    
        return view('welcome.welcome', [
            'title'       => 'Welcome',
            'images'      => $images,
            'resultCars'  => $resultCars,
            'pickupCars'  => $pickupCars,
            'reviews'     => $reviews,
        ]);
    }
}