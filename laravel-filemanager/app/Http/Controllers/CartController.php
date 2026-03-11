<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show() {
        return view('cart.show');
    }

    function add(Request $request, $id) {
        Cart::destroy();
        $product = Product::find($id);
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
        ]);
        return redirect('cart/show');
    }
}
