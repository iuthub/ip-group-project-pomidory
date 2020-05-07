<?php

namespace App\Http\Controllers\Admin;
use App\Article;
use App\Category;
use Illuminate\Http\Request;    
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard',[
            'categories'=>Category::lastCategories(5),
            'articles'=>Article::lastArticles(5),
            'count_categories'=>Category::count(),
            'count_article'=>Article::count()
        ]);
    }
}
