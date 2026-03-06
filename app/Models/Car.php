<?php

namespace App\Models;

class Car
{
    public static function pickup()
    {
        return [
            ['name' => 'サンプル車両 A', 'price' => '999万円', 'year' => '1990', 'mileage' => '8.0万km'],
            ['name' => 'サンプル車両 B', 'price' => '799万円', 'year' => '1988', 'mileage' => '6.2万km'],
            ['name' => 'サンプル車両 C', 'price' => '1299万円', 'year' => '1975', 'mileage' => '5.1万km'],
            ['name' => 'サンプル車両 D', 'price' => '699万円', 'year' => '1992', 'mileage' => '9.4万km'],
            ['name' => 'サンプル車両 E', 'price' => '899万円', 'year' => '1984', 'mileage' => '7.8万km'],
            ['name' => 'サンプル車両 F', 'price' => '1099万円', 'year' => '1979', 'mileage' => '4.9万km'],
        ];
    }

    public static function withImages(array $images)
    {
        $cars = self::pickup();

        $imgList = [
            $images['card1'],
            $images['card2'],
            $images['card3'],
            $images['card4'],
        ];

        foreach ($cars as $index => $car) {

            $cars[$index]['note'] =
                "年式: {$car['year']} / 走行: {$car['mileage']}";

            $cars[$index]['img'] =
                $imgList[$index % count($imgList)];
        }

        return $cars;
    }
}