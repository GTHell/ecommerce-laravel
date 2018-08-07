<?php

namespace App\Http\Controllers\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index() {
        $randProd = Product::inRandomOrder()->limit(3)->get();

        // Top selling product
        $topSelling = Product::getTopSelling(8);

//        SELECT count(rate) as count_rate, product_id, rate
//        from product_reviews
//        group by  rate, product_id
//        order by rate desc, count_rate desc
//        limit 5
        // Top review product
        $topReview = Product::getTopReview(8);

        $latest = Product::orderBy('created_at', 'DESC')->limit(8)->get();

        return view('index')
            ->with('randProd', $randProd)
            ->with('topReviewProduct', $topReview)
            ->with('topSellProduct', $topSelling)
            ->with('latestProduct', $latest);
    }
}
