<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $coupon = Coupon::active()->public()->first();

        $categories = Category::select('slug', 'cover', 'name')
            ->active()
            ->get();
        
        return view('frontend.index', compact('categories', 'coupon'));
    }

    public function search(Request $request): JsonResponse
    {
        $data = Product::select('slug', 'name')
            ->where('name', 'LIKE', '%'.$request->productName. '%')
            ->active()
            ->hasQuantity()
            ->activeCategory()
            ->take(5)
            ->get();

        return response()->json($data);
    }

    public function aboutus(){
        return view('frontend.pages.aboutus');
    }

    public function termofservice(){

        return view('frontend.pages.termofservice');
    }

    public function delivery(){

        return view('frontend.pages.delivery');
    }

    public function goodreturn(){
        return view('frontend.pages.goodreturn');
    }

    public function faqs(){

        return view('frontend.pages.faqs');
    }
}
