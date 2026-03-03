<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id) {
        // return "Thông tin sản phẩm id: {$id}";
        // return view('product');
        // return view('product.show');
        $price = 200000;
        return view('product.show', compact('id', 'price'));
    }

    function create() {
        // return "Thêm sản phẩm mới";
        return view('product.create');
    }

    function update($id) {
        return "Update sản phẩm có id: {$id}";
    }
}
