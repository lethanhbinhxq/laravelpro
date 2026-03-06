<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FeaturedImage;
use Illuminate\Http\Request;

class FeaturedImageController extends Controller
{
    //
    function read() {
        $post = FeaturedImage::find(1)->post;
        return $post;
    }
}
