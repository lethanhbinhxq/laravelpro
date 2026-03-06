<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

/*
 * Sử dụng query builder thực hiện các tác vụ trên module Product
 * --- Thêm sản phẩm
 * --- Select sản phẩm
 * --- Cập nhật sản phẩm
 * --- Xóa sản phẩm
 */
class AdminProductController extends Controller
{
    function add_category() {
        DB::table('product_cat')->insert(
            [
                'name' => 'Điện thoại'
            ]
        );
    }

    function add() {
        DB::table('products')->insert(
            [
                'name' => 'Điện thoại OPPO A3 8GB/128GB',
                'content' => 'OPPO A3 8GB/128GB mang đến một trải nghiệm sử dụng mượt mà và an toàn. Thiết kế bền bỉ theo tiêu chuẩn quân sự và khả năng kháng nước IP54 cho phép thiết bị vượt qua mọi thử thách, từ những buổi dã ngoại đến những cơn mưa bất chợt.',
                'price' => 4200000,
                'product_cat_id' => 1,
                'user_id' => 1,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'iPhone 17 Pro Max 256GB',
                'content' => 'iPhone 17 Pro là phiên bản mới nhất của Apple, mang đến nhiều nâng cấp tập trung vào hiệu năng, hệ thống camera và vật liệu thiết kế. Sản phẩm này giới thiệu những công nghệ mới nhằm cải thiện các tính năng cốt lõi và trải nghiệm sử dụng hàng ngày.',
                'price' => 37990000,
                'product_cat_id' => 1,
                'user_id' => 1,
            ]
        );

        DB::table('products')->insert(
            [
                'name' => 'Samsung Galaxy S25 5G 12GB/256GB',
                'content' => 'Trong sự kiện Unpacked 2025, Samsung giới thiệu Samsung Galaxy S25 - một bước đột phá với thiết kế hiện đại, camera vượt trội và hiệu suất mạnh mẽ. Được trang bị chip Snapdragon 8 Elite For Galaxy tích hợp AI, máy mang đến khả năng tối ưu hóa hiệu năng vượt bậc, đáp ứng mọi nhu cầu của người dùng, đồng thời thể hiện đẳng cấp trong từng chi tiết.',
                'price' => 17990000,
                'product_cat_id' => 1,
                'user_id' => 1,
            ]
        );
    }

    function show() {
        $products = DB::table('products')
                        ->get();
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }

    function update($id) {
        DB::table('products')
            ->where('id', $id)
            ->update([
                'name' => 'Iphone 17'
            ]);
    }

    public function delete($id)
    {
        //
        DB::table('products')
            ->where('id', $id)
            ->delete();
    }
}
