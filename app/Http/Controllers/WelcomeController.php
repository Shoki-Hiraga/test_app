<?php

namespace App\Http\Controllers;

use App\Models\ImageData;
use App\Models\Car;
use App\Models\Reason;
use App\Models\Step;
use App\Models\Review;
use App\Models\Faq;

class WelcomeController extends Controller
{
    public function index()
    {
        // 画像取得
        $images = ImageData::all();

        // データ取得（Modelから）
        $pickupCars = Car::withImages($images);
        $reviews    = Review::all();
        $featuredCars = array_slice($pickupCars, 0, 3);
    
        return view('welcome.welcome', [
            'title'       => 'Welcome',
            'images'      => $images,
            'pickupCars'  => $pickupCars,
            'featuredCars'  => $featuredCars,
            'reviews'     => $reviews,
        ]);
    }
}