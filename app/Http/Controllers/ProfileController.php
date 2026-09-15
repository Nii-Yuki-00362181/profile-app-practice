<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // 表示する固定データを準備
        $data = [
            'name' => '山田太郎',
            'age' => 25,
            'hobbies' => ['プログラミング', '読書', '旅行'],
        ];

        // resources/views/profile.blade.php にデータを渡して表示
        return view('profile', $data);
    }
}
