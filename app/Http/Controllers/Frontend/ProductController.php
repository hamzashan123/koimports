<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ProductReturn;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::with('media', 'category', 'tags', 'approvedReviews')
            ->withCount('media')
            ->withAvg('approvedReviews', 'rating')
            ->withCount('approvedReviews')
            ->active()
            ->whereSlug($slug)
            ->hasQuantity()
            ->activeCategory()
            ->firstOrFail();

        $relatedProducts = Product::with('firstMedia')->whereHas('category', function ($query) use ($product) {
            $query->whereId($product->category_id);
            $query->whereStatus(1);
        })
            ->where('id', '<>', $product->id)
            ->inRandomOrder()
            ->active()
            ->hasQuantity()
            ->take(4)
            ->get(['id', 'slug', 'name', 'price']);

        return view('frontend.product.show', compact('product', 'relatedProducts'));
    }


    public function productsReturn(Request $request){

         
       $Id = DB::table('products_return')->insertGetId([
            'shop_name' => $request->shop_name,
            'shop_email' => $request->shop_email,
            'shop_account_number' => $request->shop_account_number
       ]);

       foreach($request->product_code as $key =>  $product){
            if(!empty($request->product_code[$key])){
                $Id = DB::table('product_return_item')->insertGetId([
                    'product_return_id' => $Id,
                    'product_code' => $request->product_code[$key],
                    'quantity' => $request->quantity[$key] ,
                    'reason' => $request->reason[$key] ,
                    'invoice_number' => $request->invoice_number[$key] ,
                    'return_type' => $request->return_type[$key] ,
                ]);
            }
       }

        $admindata = [
            'admin' => true,
            'shop_name' => $request->shop_name,
            'shop_email' => $request->shop_email,
            'shop_account_number' => $request->shop_account_number,
            'product_code' => $request->product_code,
            'quantity' => $request->quantity,
            'reason' => $request->reason,
            'invoice_number' => $request->invoice_number,
            'return_type' => $request->return_type,
            'subject' => 'New Order Recieved',
            'msg' => 'A new product return request is recieved below are the products details.'
        ];

        $adminemail = User::role('admin')->first();
        Mail::to($adminemail->email)->send(new ProductReturn($admindata));

        try {
            
        
        } catch (\Exception $e) {
        
        }
       
       return redirect()->back()->with('success','Submitted Successfully!');
    }
}
