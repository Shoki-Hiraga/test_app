<?php

namespace App\Models;

class Review
{
    public static function all()
    {
        return [
            ['name' => 'ユーザーA', 'star' => 5, 'text' => '満足の査定だった。'],
            ['name' => 'ユーザーB', 'star' => 4, 'text' => '対応は良かった。'],
            ['name' => 'ユーザーC', 'star' => 2, 'text' => '査定金額が安かった。'],
            ['name' => 'ユーザーD', 'star' => 3, 'text' => '対応がイマイチだった。'],
            ['name' => 'ユーザーE', 'star' => 5, 'text' => '担当者が良かった。'],
            ['name' => 'ユーザーF', 'star' => 4, 'text' => '査定額は満足です。'],
        ];
    }
}