<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CustomerPageController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $best_seller = Product::orderBy('id', 'desc')->offset(0)->limit(10)->get();
        $special_offer = Product::where('discounted_price', '!=', null)->offset(0)->limit(1)->get();
        $data = [
            'best_seller' => $best_seller,
            'special_offer' => $special_offer
        ];
        return view('pages.customer.index')->with($data);
    }

    public function products(Request $request){
        $category = $request->category;
        if ($category) {
            $products = Product::where('category', '=', $category)->paginate(12);
        }else {
            $products = Product::orderBy('id', 'desc')->paginate(12);
        }
        return view('pages.customer.products')->with('products', $products);
    }

    public function contact(){
        return view('pages.customer.contact');
    }

    public function product($id){
        $product = Product::find($id);
        $similar_product = Product::where('product_name', '=', $product['product_name'])->get();
        $related_products = Product::where('category', '=', $product['category'])->get();
        $category = Category::find($product['category']);
        $data = [
            'product' => $product,
            'similar_product' => $similar_product,
            'related_products' => $related_products,
            'product_category' => $category,
        ];
        return view('pages.customer.product')->with($data);
    }

   
}
