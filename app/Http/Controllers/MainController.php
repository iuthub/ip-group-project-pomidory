<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Http\Request;


class MainController extends Controller
{
    // 1
    public function index(){
        $products = Product::get();
        return view('index',compact('products'));
    }
    // 2
    public function categories(){
      
        $categories= category::get();
        return view('categories',compact('categories'));

    }
    // 3
    public function category($code)
    {
        $category=Category::where('code', $code)->first();
        // $products=Product::where('category_id', $category->id)->get();
        return view('category', compact('category'));
    }
    // 4
    public function product($category,$product= null){
        return view('product',['product'=>$product]);
    }

    // 5
    public function basket(){
        return view('basket');
    }
    // 6
    public function basketPlace(){
        return view('order');
    }
}
