<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class SiteController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('index',compact('categories'));
    }
}
