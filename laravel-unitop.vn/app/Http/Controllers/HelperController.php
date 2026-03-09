<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url() {
        // 1. Tạo url cơ bản
        // $url = url('login');

        // 2. Tạo url qua route
        // $url = route('post.show');

        // 3. Tạo url qua action
        // $url = action([PostController::class, 'store']);

        // 4. Lấy current url
        $url = url()->current();
        echo $url;
    }

    function string() {
        // 1. Lấy độ dài của chuỗi
        // $str_1 = "unitop.vn";
        // echo Str::length($str_1);

        // 2. In thường, in hoa một chuỗi
        // $str = "Lê Thanh Bình";
        // echo Str::lower($str);

        // echo Str::upper($str);

        // 3. Random string
        // echo Str::random(10);

        // 4. Loại bỏ ký tự dư thừa
        // $str = Str::of('       Unitop.vn         ')->trim();
        // echo $str;

        // 5. Create slug for friendly url
        // $str = Str::slug('Unitop.vn Học web đi làm');
        // echo $str;

        // 6. Lấy chuỗi con
        // $str = "Laravel Pro";
        // echo Str::of($str)->substr(8);
        // echo Str::of($str)->substr(0, 7);

        // 7. Nối chuỗi vào đuôi
        // echo Str::of('Lê Thanh ')->append('Bình');

        // 8. Tìm kiếm & thay thế chuỗi
        $str = "Laravel 7x";
        echo Str::of($str)->replace('7x', '6x');
    }
}
